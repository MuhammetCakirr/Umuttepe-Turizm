<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		//$this->load->view('home/index');
		$this->load->view('template', array('content' => 'home/index'));
	}

	public function changePage($page)
	{
		//$this->load->view('home/index');
		$this->load->view('template', array('content' => "home/$page"));
	}
}
