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
		//if ($this->session->userdata('user_id')) {
			$data['content'] = 'home/index';
			$this->load->view('template', array('data' => $data));
		//} else {
			//redirect('login');
		//	$this->load->view('template', array('content' => "login/login"));
		//}
	}

	public function changePage($page) {
		//if ($this->session->userdata('user_id')) {
			$data['content'] = "home/$page";
			$this->load->view('template', array('data' => $data));
		//} else {
			//redirect('login');
		//	$this->load->view('template', array('content' => "login/login"));
		//}
	}
}
