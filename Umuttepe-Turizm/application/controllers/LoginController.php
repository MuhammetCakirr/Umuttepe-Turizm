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
			$email = $_POST["email"];
			$password = $_POST["password"];
			$account = $this->DBConnectionModel->checkLogin($email, $password);
			$data = array();
			if ($account) {
				$this->session->set_userdata('id', $account['id']);
				$this->session->set_userdata('email', $account['email']);
				$this->session->set_userdata('name', $account['fullName']);
				$this->load->helper('url');
				redirect('');
			}else {
				$data['error'] = "<div class='alert alert-danger' role='alert'>Hatalı e-posta adresi veya şifre. Lütfen tekrar deneyin.</div>";
			}
		}
		$data['content'] = "login/$page";
		$this->load->view('template', array('data' => $data));
	}
}
