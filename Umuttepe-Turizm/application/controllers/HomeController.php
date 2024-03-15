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

	public function changePage($page)
	{
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
