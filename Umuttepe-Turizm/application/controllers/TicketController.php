<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
	}

	public function index() {
		$cities = $this->DBConnectionModel->getCities();

		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if($_POST['operation'] == "searchTicket"){
				$data['fromCityId'] = isset($_POST['fromCityId']) ? $_POST['fromCityId'] : 1;
				$data['toCityId']= isset($_POST['toCityId']) ? $_POST['toCityId'] : 2;
				$data['gTarih'] = isset($_POST['gTarih']) ? $_POST['gTarih'] : date('Y-m-d', strtotime('-3 day'));
			}else if($_POST['operation'] == "buying"){
				if($_POST['seat_numbers'] == ''){
					$data['gTarih'] = date('Y-m-d', strtotime('-3 day'));
					$data['fromCityId'] = 1;
					$data['toCityId'] = 2;
					$data['error'] = "<div class='alert alert-danger' role='alert'>Lütfen en az birkoltuk seçiniz.</div>";
				}else {
					// burada buraya gelen post verileri ile buying sayfasına post et
					$data['content'] = "buying/buying";
					$data['seat_numbers'] = $_POST['seat_numbers'];
					$data['id'] = $_POST['id'];
					$this->load->view('template', array('data' => $data));
					return;
				}
			}
		}else{
			$data['gTarih'] = date('Y-m-d', strtotime('-3 day'));
			$data['fromCityId'] = 1;
			$data['toCityId'] = 2;
		}
		$data['busRoutes'] = $this->DBConnectionModel->getBusRoutesWithSeats($data['fromCityId'] , $data['toCityId'], $data['gTarih']);

		$data['fromCity'] = $this->getCityNameById($data['fromCityId'], $cities);
		$data['toCity'] = $this->getCityNameById($data['toCityId'], $cities);

		// gTarih = 2024-03-03 dır
		$data['gTarihFormat'] = $this->tarihFormat($data['gTarih']);


		$data['cities'] = $cities;
		$data['content'] = 'ticket/tickets';

		$this->load->view('template', array('data' => $data));
	}

	// Şehir adını id'ye göre almak için bir fonksiyon
	public function getCityNameById($cityId, $cities) {
		foreach ($cities as $city) {
			if ($city['id'] == $cityId) {
				return $city['name'];
			}
		}
		return '';
	}
	public function tarihFormat($gTarih) {
		$aylar = array(
			'01' => 'Ocak',
			'02' => 'Şubat',
			'03' => 'Mart',
			'04' => 'Nisan',
			'05' => 'Mayıs',
			'06' => 'Haziran',
			'07' => 'Temmuz',
			'08' => 'Ağustos',
			'09' => 'Eylül',
			'10' => 'Ekim',
			'11' => 'Kasım',
			'12' => 'Aralık'
		);
		$gunler = array(
			'Pazartesi',
			'Salı',
			'Çarşamba',
			'Perşembe',
			'Cuma',
			'Cumartesi',
			'Pazar'
		);

		$parcalar = explode('-', $gTarih);

		$yil = $parcalar[0];
		$ay = $parcalar[1];
		$gun = $parcalar[2];

		return $gun . ' ' . $aylar[$ay] . ' ' . $yil . ', ' . $gunler[date('N', strtotime($gTarih)) - 1];
	}

	public function changePage($page)
	{
		$data['content'] = "ticket/$page";
		$this->load->view('template', array('data' => "ticket/$page"));
	}
}