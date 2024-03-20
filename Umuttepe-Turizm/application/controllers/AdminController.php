<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DBConnectionModel');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index($page)
	{
		$data['content'] = "admin/$page";
		$this->load->view($data['content'], array('data' => $data));
	}

}
