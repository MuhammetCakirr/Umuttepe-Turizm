<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketController extends CI_Controller {

	public function index()
	{
		//$this->load->view('home/index');
		$this->load->view('template', array('content' => 'ticket/tickets'));
	}

	public function changePage($page)
	{
		//$this->load->view('home/index');
		$this->load->view('template', array('content' => "ticket/$page"));
	}
}