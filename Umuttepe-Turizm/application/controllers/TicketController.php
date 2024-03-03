<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
	}

	public function index()
	{
		$data['content'] = 'ticket/tickets';
		$this->load->view('template', array('data' => $data));
	}

	public function changePage($page)
	{
		$data['content'] = "ticket/$page";
		$this->load->view('template', array('data' => "ticket/$page"));
	}
}
