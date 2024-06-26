<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
		$this->load->helper('url');
	}

	public function index($page)
	{
		$id = $this->session->userdata('id');

		if ($id) {
			$user = $this->DBConnectionModel->getUserInfo($id);
			if ($user) {
				$data['user'] = $user;
				$data['content'] = "settings/settings";
				$data['contentPlaceholder'] = "settings/$page";
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					switch ($_POST['page']) {
						case 'sifreDegistir':
							$data['result'] = $this->sifreDegistir();
							break;
						case 'hesapBilgilerim':
							$result = $this->hesapBilgilerimiGuncelle();
							if ($result['result']) {
								$data['hesapBilgilerim'] = $result['hesapBilgilerim'];
							} else {
								$data['error'] = $result['error'];
							}
							break;
						default:
							break;
					}
				} else {
					switch ($page) {
						case 'kayitli_kartlarim':case 'settings':
							$data['kart'] = $this->DBConnectionModel->getMyCard($id);
							break;
						case 'biletlerim':
							$data['biletlerim'] = $this->biletlerim();
							$data['tarife'] = $this->DBConnectionModel->getTarife();
							break;
						case 'hesap_bilgilerim':
							$data['hesapBilgilerim'] = $this->hesapBilgilerim();
							break;
						case 'cikis':
							$this->cikis();
							redirect('../index');
							return;
						case 'hesabimi_sil':
							$this->hesabimiSil();
							redirect('../index');
							return;
						default:
							break;
					}
				}
				$account_id = $this->session->userdata('id');
				$data['bakiye'] = $this->DBConnectionModel->getBakiye($account_id);
				$this->load->view('template', array('data' => $data));
			} else {
				redirect('../index');
			}
		} else {

			redirect('../login');
		}
	}

	public function biletIslem(){
		$id = $_POST['id'];
		$islem = $_POST['islem'];
		$account_id = $this->session->userdata('id');

		switch ($islem){
			case "1": // Rezervasyon edilmiş biletin Ödemesini Yap
				$bakiye = $this->DBConnectionModel->getBakiye($account_id);
				$ticket = $this->DBConnectionModel->getTicketByTicketId($id);
				$bakiye = $bakiye > $ticket['price'] ? $bakiye - $ticket['price'] : 0;
				$this->DBConnectionModel->changeBakiye($account_id,$bakiye);
				$this->DBConnectionModel->changeTicketStatus($id,2);
				$this->DBConnectionModel->changeSeatStatus($id,2);
				return true;
			case "2": // Rezerve edilmiş bileti iptal et
				$this->DBConnectionModel->changeTicketStatus($id,5);
				$this->DBConnectionModel->changeSeatStatus($id,1);
				return true;
			case "3": // Bileti Açığa Alma
				$bakiye = $this->DBConnectionModel->getBakiye($account_id);
				$ticket = $this->DBConnectionModel->getTicketByTicketId($id);
				$bakiye =  $bakiye + $ticket['price'];
				$this->DBConnectionModel->changeBakiye($account_id,$bakiye);
				$this->DBConnectionModel->changeTicketStatus($id,4);
				$this->DBConnectionModel->changeSeatStatus($id,1);
				return true;
		}
		return false;
	}

	public function biletlerim()
	{
		$id = $this->session->userdata('id');
		return $this->DBConnectionModel->getTicketById($id);
	}

	public function hesapBilgilerimiGuncelle()
	{
		$data = array();

		$fullName = $_POST['fullName'];
		$tcKimlikNo = $_POST['tcKimlikNo'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$gender = $_POST['gender'];
		$birthDate = $_POST['birthDate'];

		$id = $this->session->userdata('id');

		$isUpdated = $this->DBConnectionModel->updateUserInfo($id, $fullName, $tcKimlikNo, $email, $tel, $gender, $birthDate);

		if ($isUpdated) {
			$data['result'] = true;
			$data['hesapBilgilerim'] = $this->hesapBilgilerim();
		} else {
			$data['result'] = false;
			$data['error'] = "<div class='alert alert-danger' role='alert'>Hesap bilgileri güncellenirken bir hata oluştu. Lütfen tekrar deneyin.</div>";
		}

		return $data;
	}

	public function hesapBilgilerim()
	{
		$id = $this->session->userdata('id');

		$user_info = $this->DBConnectionModel->getUserInfo($id);

		$data['fullName'] = $user_info['fullName'];
		$data['tcKimlikNo'] = $user_info['tcKimlikNo'];
		$data['email'] = $user_info['email'];
		$data['tel'] = $user_info['tel'];
		$data['gender'] = $user_info['gender'];
		$data['birthDate'] = $user_info['birthDate'];

		return $data;
	}

	public function sifreDegistir()
	{
		$mevcutSifre = $_POST['mevcut'];
		$yeniSifre = $_POST['newPass'];
		$yeniSifreTekrar = $_POST['newPassAgain'];

		$id = $this->session->userdata('id');
		$user = $this->DBConnectionModel->getUserInfo($id);

		// Kullanıcının mevcut şifresini kontrol et
		if (password_verify($mevcutSifre, $user['password'])) {
			if ($yeniSifre === $yeniSifreTekrar) {
				$this->DBConnectionModel->updateUserPassword($id, $yeniSifre);
				return "<div class='alert alert-success' role='alert'>Şifreniz başarıyla güncellendi!</div>";
			} else {
				return "<div class='alert alert-danger' role='alert'>Yeni şifreler eşleşmiyor!</div>";
			}
		} else {
			return "<div class='alert alert-danger' role='alert'>Mevcut şifreniz yanlış!</div>";
		}
	}



	public function cikis()
	{
		session_unset(); // Tüm oturum değişkenlerini temizle
		session_destroy(); // Oturumu yok et
	}

	public function hesabimiSil()
	{
		$id = $this->session->userdata('id');
		$this->load->model('DBConnectionModel');
		$this->DBConnectionModel->deleteAccount($id);

		session_unset(); // Tüm oturum değişkenlerini temizle
		session_destroy(); // Oturumu yok et
	}

}

