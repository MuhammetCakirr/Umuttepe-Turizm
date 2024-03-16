<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuyingController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
		$this->load->helper('url');
	}

	public function index($page)
	{
		$account_id = $this->session->userdata('id');
		if ($account_id) {
			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['operation'])) {
				if ($_POST['operation'] == 'paying') {
					$buying = $_POST['buying']; // 1 ise satın alım 2 ise rezervasyon
					$contactFullName = $_POST['contactFullName'];
					$contactTel = $_POST['contactTel'];
					$seatNumbers = explode(',', $_POST['seatNumbers']);
					$cartNo = $_POST['cartNo'];
					$cartFullName = $_POST['cartFullName'];
					$aylar = $_POST['aylar'];
					$yillar = $_POST['yıllar'];
					$cartCvc = $_POST['cartCvc'];
					$id = $_POST['id'];
					$totalPrice = $_POST['totalPrice'];

					$ticketId = $this->DBConnectionModel->createTicket($account_id, $id, $contactFullName, $contactTel, $cartFullName, $cartNo, $aylar, $yillar, $cartCvc, $totalPrice, $buying);

					foreach ($seatNumbers as $seatNumber) {
						$passengerName = $_POST["passengerName$seatNumber"];
						$passengerSurname = $_POST["passengerSurname$seatNumber"];
						$passengerTc = $_POST["passengerTc$seatNumber"];
						$passengeSelector = $_POST["passengeSelector$seatNumber"];
						$this->DBConnectionModel->createPassenger($ticketId, $passengerName, $passengerSurname, $passengerTc, $passengeSelector, $seatNumber);
						$this->DBConnectionModel->changeSeatAvailability($id, $seatNumber, 2);
					}
					redirect("../biletlerim");
					return;
				}
			}else{
				$seatNumbers = explode(',', $this->session->userdata('seat_numbers1'));
				$id  = $this->session->userdata('bus_id1');
				$busRoute = $this->DBConnectionModel->getBusRoute($id);
				$data['busRoute'] = $busRoute;
				$totalPrice = count($seatNumbers) * $busRoute['price'];
				$data['totalPrice1'] = $totalPrice;
				$data['id'] = $id;
				$data['seatNumbers'] = $seatNumbers;
				$data['seat_numbers'] = $this->session->userdata('seat_numbers1');

				if($this->session->userdata('seferTuru') == "2"){
					$seatNumbers2 = explode(',', $this->session->userdata('seat_numbers2'));
					$id2  = $this->session->userdata('bus_id2');
					$busRoute2 = $this->DBConnectionModel->getBusRoute($id2);
					$data['busRoute2'] = $busRoute2;
					$totalPrice2 = count($seatNumbers2) * $busRoute2['price'];
					$data['totalPrice2'] = $totalPrice2;
					$data['id2'] = $id2;
					$data['seatNumbers2'] = $seatNumbers2;
					$data['seat_numbers2'] = $this->session->userdata('seat_numbers2');
				}
			}
			$data['tarife'] = $this->DBConnectionModel->getTarife();
			$data['content'] = "buying/$page";
			$this->load->view('template', array('data' => $data));
		}else {
			redirect("../login");
		}
	}
}
