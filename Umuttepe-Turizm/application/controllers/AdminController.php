<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DBAdminModel');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index($page)
	{
		$email = $this->session->userdata('email');
		$pass = $this->session->userdata('pass');
		if ($email != null && $pass != null){
			$data['name'] = $this->session->userdata('adminName') . " " . $this->session->userdata('adminSurname');
			switch ($page) {
				case 'index':
					// bilet sayısı, rezervasyon sayısı, sefer sayısı, şehir sayısı, bilet iptal sayısı, haftalık analiz,top Seferler,toplam gelir
					$data['mainData'] = $this->DBAdminModel->getMainData();
					break;
				case 'kullanicilar':
					$data['accounts'] = $this->DBAdminModel->getAccounts();
					break;
				case 'sehirler':
					$data['cities'] = $this->DBAdminModel->getCities();
					break;
				case 'rotalar':
					$data['routes'] = $this->DBAdminModel->getRoutes();
					$data['cities'] = $this->DBAdminModel->getCities();
					break;
				case 'tarifeler':
					$data['tarifeler'] = $this->DBAdminModel->getTarifeler();
					break;
				case 'profil':
					$data['profil'] = $this->DBAdminModel->getProfil($email,$pass);
					break;
				default:
					$data['mainData'] = $this->DBAdminModel->getMainData();
					break;
			}
			$data['content'] = "admin/admin";
			$data['contentPlaceholder'] = "admin/$page";
			$this->load->view($data['content'], array('data' => $data));
		}else{
			redirect("../adminLogin");
		}
	}

	public function login()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ($_POST['operation'] == "hesapBilgileriGuncelle"){
				$id = $this->session->userdata('adminId');
				$name = $_POST['firstName'];
				$surname = $_POST['lastName'];
				$email = $_POST['email'];
				$tel = $_POST['phoneNumber'];

				$this->DBAdminModel->updateProfil($id,$name,$surname,$email,$tel);
				redirect("../profil");
			}elseif ($_POST['operation'] == "sifreGuncelle"){
				$id = $this->session->userdata('adminId');
				$oldPass = $_POST['oldPass'];
				$newPass = $_POST['newPass'];
				$newAgainPass = $_POST['newAgainPass'];

				if ($newPass !== $newAgainPass) {
					echo "<div class='alert alert-danger' role='alert'>Şifreler eşleşmiyor. Lütfen tekrar deneyin.</div>";
					exit();
				}

				$profil = $this->DBAdminModel->changePass($id,$oldPass,$newPass);
				if (isset($profil) && $profil != false) {
					$this->session->set_userdata('adminId', $profil['id']);
					$this->session->set_userdata('adminName', $profil['name']);
					$this->session->set_userdata('email', $profil['email']);
					$this->session->set_userdata('pass', $profil['password']);
					redirect("../profil");
					return;
				}else{
					echo "<div class='alert alert-danger' role='alert'>Mevcut şifrenizi hatalı girdiniz.</div>";
					exit();
				}
			}else{
				$email = $_POST['admineposta'];
				$pass = $_POST['adminsifre'];
				$profil = $this->DBAdminModel->getProfil($email, $pass);
				if ($profil) {
					$this->session->set_userdata('adminId', $profil['id']);
					$this->session->set_userdata('adminName', $profil['name']);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('pass', $pass);
					redirect("../admin");
				} else {
					$data['error'] = "<div class='alert alert-danger' role='alert'>Hatalı e-posta adresi veya şifre. Lütfen tekrar deneyin.</div>";
					$data['content'] = "admin/login";
					$this->load->view($data['content'], array('data' => $data));
				}
			}
			return;
		}
		$data['content'] = "admin/login";
		$this->load->view($data['content'], array('data' => $data));
	}

	public function rotaEkle()
	{
		$fromCityId = $_POST['kalkisyeriid'];
		$toCityId = $_POST['varisyeriid'];
		$departureTime = $_POST['kalkissaati'];
		$arrivalTime = $_POST['varissaati'];
		$price = $_POST['biletucreti'];
		$busPlateCode = $_POST['otobusplakasi'];

		return $this->DBAdminModel->addRoute($fromCityId, $toCityId, $departureTime, $arrivalTime, $price, $busPlateCode);
	}

	public function rotaGuncelle()
	{
		$id = $_POST['id'];
		$fromCityId = $_POST['kalkisyeriid'];
		$toCityId = $_POST['varisyeriid'];
		$departureTime = $_POST['kalkissaati'];
		$arrivalTime = $_POST['varissaati'];
		$price = $_POST['biletucreti'];
		$busPlateCode = $_POST['otobusplakasi'];

		return $this->DBAdminModel->updateRoute($id, $fromCityId, $toCityId, $departureTime, $arrivalTime, $price, $busPlateCode);
	}

	public function tarifeGuncelle()
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$sale = $_POST['sale'];

		return $this->DBAdminModel->updateTarife($id, $name, $sale);
	}

	public function tarifeSil()
	{
		$id = $_POST['id'];

		return $this->DBAdminModel->deleteTarife($id);
	}

	public function tarifeEkle()
	{
		$name = $_POST['name'];
		$sale = $_POST['sale'];

		return $this->DBAdminModel->addTarife($name, $sale);
	}

	public function sehirEkle()
	{
		$name = $_POST['name'];
		$plate_code = $_POST['plate_code'];

		return $this->DBAdminModel->addCity($name, $plate_code);
	}

	public function sehirSil()
	{
		$id = $_POST['id'];

		return $this->DBAdminModel->deleteCity($id);
	}

}
