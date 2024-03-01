<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingsController extends CI_Controller {

	public function index($page)
	{
		$this->load->view('template', array('content' => "settings/$page"));
	}
}
