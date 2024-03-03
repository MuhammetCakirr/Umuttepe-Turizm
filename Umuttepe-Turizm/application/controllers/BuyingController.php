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
		$data['content'] = 'buying/buying';
		$this->load->view('template', array('data' => $data));
	}
}
