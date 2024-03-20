<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DBAdminModel');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index($page)
	{
		$data['name'] = $this->session->userdata('name');
		switch ($page) {
			case 'index':
				// bilet sayısı, rezervasyon sayısı, sefer sayısı, şehir sayısı, bilet iptal sayısı, haftalık analiz,top Seferler,toplam gelir
				$data['mainData'] = $this->DBAdminModel->getMainData();
				break;
			case 'kullanicilar':
				$data['accounts'] = $this->DBAdminModel->getAccounts();
				break;
			case 'sehirler':
				$data['cities'] = $this->DBAdminModel->getCities();
				break;
			case 'rotalar':
				//$data['mainData'] = $this->DBAdminModel->getMainData()3;
				break;
			case 'tarifeler':
				$data['tarifeler'] = $this->DBAdminModel->getTarifeler();
				break;
			default:
				$data['mainData'] = $this->DBAdminModel->getMainData();
				break;
		}
		$data['content'] = "admin/admin";
		$data['contentPlaceholder'] = "admin/$page";
		$this->load->view($data['content'], array('data' => $data));
	}

	public function tarifeGuncelle(){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$sale = $_POST['sale'];

		return $this->DBAdminModel->updateTarife($id,$name,$sale);
	}

	public function tarifeSil(){
		$id = $_POST['id'];

		return $this->DBAdminModel->deleteTarife($id);
	}
	public function tarifeEkle(){
		$name = $_POST['name'];
		$sale = $_POST['sale'];

		return $this->DBAdminModel->addTarife($name,$sale);
	}

	public function sehirEkle(){
		$name = $_POST['name'];
		$plate_code = $_POST['plate_code'];

		return $this->DBAdminModel->addCity($name,$plate_code);
	}

	public function sehirSil(){
		$id = $_POST['id'];

		return $this->DBAdminModel->deleteCity($id);
	}

}
