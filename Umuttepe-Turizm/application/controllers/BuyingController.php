<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuyingController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('DBConnectionModel');
	}

	public function index()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			switch ($_POST['operation']) {
				case 'buying':
					$id = $_POST['id'];
					$seatNumbers = explode(',', $_POST['seat_numbers']);
					$busRoute= $this->DBConnectionModel->getBusRoute($id);
					$data['busRoute'] = $busRoute;
					$totalPrice = count($seatNumbers) * $busRoute['price'];
					$data['totalPrice'] = $totalPrice;

					$data['id'] = $id;
					$data['seatNumbers'] = $seatNumbers;
					break;
				case 'paying':
					var_dump($_POST);
					exit();
					break;
				default:
					break;
			}
		}
		$data['content'] = 'buying/buying';
		$this->load->view('template', array('data' => $data));
	}
}
