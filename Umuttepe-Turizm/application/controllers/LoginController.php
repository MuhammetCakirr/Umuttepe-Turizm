<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index($page)
	{
        if($_POST){
            $this->load->view('template', array('content' => 'home/index'));
        }
		$this->load->view('template', array('content' => "login/$page"));
	}
}
