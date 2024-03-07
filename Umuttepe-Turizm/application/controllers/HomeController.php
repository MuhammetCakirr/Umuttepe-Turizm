<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('DBConnectionModel');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index() {
		$data['content'] = "home/index";
		$this->load->view('template', array('data' => $data));

		//$this->generateLicensePlate();
		//exit();
	}

	public function changePage($page) {
		$data['content'] = "home/$page";
		$this->load->view('template', array('data' => $data));
	}

	function generateLicensePlate() {

		$routes = $this->DBConnectionModel->getBus();

		foreach ($routes as $route){
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$plate = $route['plate_code'] ."".$characters[rand(0, strlen($characters) - 1)] .$characters[rand(0, strlen($characters) - 1)] .$characters[rand(0, strlen($characters) - 1)].rand(0, 9) .rand(0, 9).rand(0, 9);
			$this->DBConnectionModel->setBusPlateCode($plate,$route['id']);
			var_dump(true);
		}

	}
}
