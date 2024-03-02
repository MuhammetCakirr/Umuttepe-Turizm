<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingsController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
	}

	public function index($page) {
		$id = $this->session->userdata('id');

		if ($id) {
			$user = $this->DBConnectionModel->getUserInfo($id);
			if ($user) {
				$data['user'] = $user;
				$data['content'] = "settings/settings";
				$data['contentPlaceholder'] = "settings/$page";
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					switch ($_POST['page']){
						case 'sifreDegistir':
							$data['result'] = $this->sifreDegistir();
							break;
						default:
							break;
					}
				}else{
					$this->load->helper('url');
					switch ($page){
						case 'cikis':
							$this->cikis();
							redirect('');
							return;
						case 'hesabimi_sil':
							$this->hesabimiSil();
							redirect('');
							return;
						default:
							break;
					}
				}
				$this->load->view('template', array('data' => $data));
			} else {
				redirect('');
			}
		} else {
			redirect('login');
		}
	}

	public function sifreDegistir(){
		$mevcutSifre = $_POST['mevcut'];
		$yeniSifre = $_POST['newPass'];
		$yeniSifreTekrar = $_POST['newPassAgain'];

		$id = $this->session->userdata('id');
		$user = $this->DBConnectionModel->getUserInfo($id);

		// Kullanıcının mevcut şifresini kontrol et
		if ($mevcutSifre === $user['password']) {
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


	public function cikis(){
		session_unset(); // Tüm oturum değişkenlerini temizle
		session_destroy(); // Oturumu yok et
	}

	public function hesabimiSil(){
		$id = $this->session->userdata('id');
		$this->load->model('DBConnectionModel');
		$this->DBConnectionModel->deleteAccount($id);

		session_unset(); // Tüm oturum değişkenlerini temizle
		session_destroy(); // Oturumu yok et
	}

}

