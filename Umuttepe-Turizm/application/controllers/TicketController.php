<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TicketController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
		$this->load->helper('url');
	}

	public function index()
	{
		$cities = $this->DBConnectionModel->getCities();
		$data['isSingle'] = true;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			switch ($_POST['operation']) {
				case 'homeSearch':
					$this->session->set_userdata('seat_numbers1', null);
					$data['fromCityId'] = isset($_POST['fromCityId']) ? $_POST['fromCityId'] : 1;
					$data['toCityId'] = isset($_POST['toCityId']) ? $_POST['toCityId'] : 2;
					$data['gTarih'] = isset($_POST['gTarih']) ? $_POST['gTarih'] : date('Y-m-d');
					$data['dTarih'] = isset($_POST['dTarih']) ? $_POST['dTarih'] : date('Y-m-d');
					$data['seferTuru'] = isset($_POST['seferTuru']) ? $_POST['seferTuru'] == "1" ? 1 : 2 : 1;
					$this->session->set_userdata('fromCityId', $data['fromCityId']);
					$this->session->set_userdata('toCityId', $data['toCityId']);
					$this->session->set_userdata('gTarih', $data['gTarih']);
					$this->session->set_userdata('dTarih', $data['dTarih']);
					$this->session->set_userdata('seferTuru', $data['seferTuru']);
					$this->session->set_userdata('isFirstTicket', !($data['seferTuru'] == 1));
					break;
				case 'searchTicket':
					$this->session->set_userdata('seat_numbers1', null);
					$data['fromCityId'] = isset($_POST['fromCityId']) ? $_POST['fromCityId'] : 1;
					$data['toCityId'] = isset($_POST['toCityId']) ? $_POST['toCityId'] : 2;
					$data['gTarih'] = isset($_POST['gTarih']) ? $_POST['gTarih'] : date('Y-m-d');
					$data['seferTuru'] = 1;
					$this->session->set_userdata('seferTuru', $data['seferTuru']);
					break;
				case 'buying':
					$data['id'] = $_POST['id'];
					if($this->session->userdata('seferTuru') == 2){
						if($this->session->userdata('isFirstTicket')){
							$this->session->set_userdata('isFirstTicket', false);
							$data['fromCityId'] = $this->session->userdata('toCityId');
							$data['toCityId'] = $this->session->userdata('fromCityId');
							$data['gTarih'] = $this->session->userdata('dTarih');
							$this->session->set_userdata('bus_id1', $data['id']);
							$this->session->set_userdata('seat_numbers1', $_POST['seat_numbers']);
							$data['selectedSeatNumbers'] = $_POST['seat_numbers'];
							$cinsiyetler = array();
							$ayrilmisVeri = explode(',', $data['selectedSeatNumbers']); // Virgülle ayrılmış veriyi ayır
							foreach ($ayrilmisVeri as $veri) {
								$parcalar = explode('-', $veri); // Veriyi kırmızıdan parçala
								$cinsiyetler[] = $parcalar[1]; // Cinsiyeti al
							}
							$data['selectedGenders'] = implode(',', $cinsiyetler); // Cinsiyetleri virgülle birleştir

						}else{
							$this->session->set_userdata('seat_numbers2', $_POST['seat_numbers']);
							$this->session->set_userdata('bus_id2', $data['id']);
							redirect('../buying');
							return;
						}
					}else{
						$this->session->set_userdata('bus_id1', $data['id']);
						$this->session->set_userdata('seat_numbers1', $_POST['seat_numbers']);
						redirect('../buying');
						return;
					}

					break;
				default :
					$this->session->set_userdata('seat_numbers1', null);
					$data['gTarih'] = date('Y-m-d');
					$data['fromCityId'] = 1;
					$data['toCityId'] = 2;
					$data['seferTuru'] = 1;
					$this->session->set_userdata('seferTuru', $data['seferTuru']);
					break;
			}
		} else {
			$this->session->set_userdata('seat_numbers1', null);
			$data['gTarih'] = date('Y-m-d');
			$data['fromCityId'] = 1;
			$data['toCityId'] = 2;
			$data['seferTuru'] = 1;
			$this->session->set_userdata('seferTuru', $data['seferTuru']);
		}
		$data['busRoutes'] = $this->DBConnectionModel->getBusRoutesWithSeats($data['fromCityId'], $data['toCityId'], $data['gTarih']);
		$data['fromCity'] = $this->getCityNameById($data['fromCityId'], $cities);
		$data['toCity'] = $this->getCityNameById($data['toCityId'], $cities);

		$data['gTarihFormat'] = $this->tarihFormat($data['gTarih']);


		$data['cities'] = $cities;
		$data['content'] = 'ticket/tickets';

		$this->load->view('template', array('data' => $data));
	}

	// Şehir adını id'ye göre almak için bir fonksiyon
	public function getCityNameById($cityId, $cities)
	{
		foreach ($cities as $city) {
			if ($city['id'] == $cityId) {
				return $city['name'];
			}
		}
		return '';
	}

	public function tarihFormat($gTarih)
	{
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
