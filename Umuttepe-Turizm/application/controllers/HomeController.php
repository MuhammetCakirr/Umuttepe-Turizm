<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DBConnectionModel');
		$this->load->library('session');
		$this->load->helper('url');
		$this->DBConnectionModel->cron();
	}

	public function index()
	{
		$cities = $this->DBConnectionModel->getCities();
		$data['fromCityId'] = 1;
		$data['toCityId'] = 2;
		$data['gTarih'] = date('Y-m-d');
		$data['dTarih'] = date('Y-m-d', strtotime('+1 day'));

		$data['cities'] = $cities;
		$data['content'] = "home/index";
		$this->load->view('template', array('data' => $data));
	}

	public function contact()
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$subject = $_POST['subject'];
		$content = $_POST['content'];

		$result = $this->DBConnectionModel->addContact($name, $email, $tel, $subject, $content);
		if ($result) {
			return "<div class='alert alert-success' role='alert'>Talebiniz başarıyla iletilmiştir.</div>";
		} else {
			return "<div class='alert alert-danger' role='alert'>Bir hata oluştu lütfen tekrar deneyin.</div>";
		}
	}

	public function changePage($page)
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST" && $page == "contact") {

			$data['result'] = $this->contact();
		}
		$data['content'] = "home/$page";
		$this->load->view('template', array('data' => $data));
	}

	function generateLicensePlate()
	{
		$routes = $this->DBConnectionModel->getRoutes();

		foreach ($routes as $route) {
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$plate = $route['plate_code'] . "" . $characters[rand(0, strlen($characters) - 1)] . $characters[rand(0, strlen($characters) - 1)] . $characters[rand(0, strlen($characters) - 1)] . rand(0, 9) . rand(0, 9) . rand(0, 9);
			$this->DBConnectionModel->setBusPlateCode($plate, $route['id']);
			var_dump(true);
		}

	}
}
