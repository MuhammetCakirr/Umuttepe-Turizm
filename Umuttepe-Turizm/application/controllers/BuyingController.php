<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyingController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
	}
	public function index()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			var_dump($_POST);
			exit();
		}
		$data['content'] = 'buying/buying';
		$this->load->view('template', array('data' => $data));
	}
}
