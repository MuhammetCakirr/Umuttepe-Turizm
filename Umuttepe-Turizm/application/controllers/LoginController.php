<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index($page)
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$this->load->model('DBConnectionModel');
			switch ($_POST['page']) {
				case 'login':
					$data = $this->login();
					break;
				case 'register':
					$data = $this->register();
					if ($data['success'] !== null){
						$page = "login";
					}else{
						$page = "register";
					}
					break;
				default:
					break;
			}

		}
		$data['content'] = "login/$page";
		$this->load->view('template', array('data' => $data));
	}


	function login()
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		$account = $this->DBConnectionModel->checkLogin($email, $password);
		$data = array();
		if ($account) {
			$this->session->set_userdata('id', $account['id']);
			$this->session->set_userdata('email', $account['email']);
			$this->session->set_userdata('name', $account['fullName']);
			$this->load->helper('url');
			redirect('../index');
		} else {
			$data['error'] = "<div class='alert alert-danger' role='alert'>Hatalı e-posta adresi veya şifre. Lütfen tekrar deneyin.</div>";
		}

		return $data;
	}

	function register(){
		$fullName = $_POST["fullName"];
		$email = $_POST["email"];
		$birthDate = $_POST["birthDate"];
		$gender = $_POST["gender"];
		$tcKimlikNo = $_POST["tcKimlikNo"];
		$tel = $_POST["tel"];
		$password = $_POST["password"];
		$passwordAgain = $_POST["passwordAgain"];

		if ($password !== $passwordAgain) {
			$data['error'] = "<div class='alert alert-danger' role='alert'>Şifreler eşleşmiyor. Lütfen tekrar deneyin.</div>";
			$data['success'] = null;
			return $data;
		}

		$existingUser = $this->DBConnectionModel->getUserByEmail($email);
		if ($existingUser) {
			$data['error'] = "<div class='alert alert-danger' role='alert'>Bu e-posta adresi zaten kullanılıyor. Lütfen farklı bir e-posta adresi deneyin.</div>";
			$data['success'] = null;
			return $data;
		}

		$result = $this->DBConnectionModel->registerUser($fullName, $email, $birthDate, $gender, $tcKimlikNo, $tel, $password);
		if ($result) {
			$data['success'] = "<div class='alert alert-success' role='alert'>Üyelik işlemi başarıyla tamamlandı. Artık giriş yapabilirsiniz.</div>";
			$data['error'] = null;
		} else {
			$data['error'] = "<div class='alert alert-danger' role='alert'>Üyelik işlemi sırasında bir hata oluştu. Lütfen daha sonra tekrar deneyin.</div>";
			$data['success'] = null;
		}
		return $data;
	}
}
