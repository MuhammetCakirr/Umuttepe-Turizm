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
		$id = $this->session->userdata('id');

		if ($id) {
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				switch ($_POST['operation']) {
					case 'buying':
						$id = $_POST['id'];
						$seatNumbers = explode(',', $_POST['seat_numbers']);
						$busRoute = $this->DBConnectionModel->getBusRoute($id);
						$data['busRoute'] = $busRoute;
						$totalPrice = count($seatNumbers) * $busRoute['price'];
						$data['totalPrice'] = $totalPrice;

						$data['id'] = $id;
						$data['seatNumbers'] = $seatNumbers;
						$data['seat_numbers'] = $_POST['seat_numbers'];
						break;
					case 'paying':
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

						$ticketId = $this->DBConnectionModel->createTicket($id, $contactFullName, $contactTel, $cartFullName, $cartNo, $aylar, $yillar, $cartCvc, $totalPrice);

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
					default:
						break;
				}
			}
			$data['content'] = "buying/$page";
			$this->load->view('template', array('data' => $data));
		}else {
			redirect("../login");
		}
	}
}
