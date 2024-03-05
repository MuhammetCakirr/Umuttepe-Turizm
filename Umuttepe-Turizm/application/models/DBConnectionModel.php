<?php

class DBConnectionModel
{
	public function __construct()
	{
		// constructor
	}

	public function mysqlConn()
	{
		$db = 'umuttepe_turizm';
		$server = "localhost";
		$username = "root";
		$password = "";

		$link_mysql = mysqli_connect($server, $username, $password, $db);
		if (mysqli_connect_errno()) {
			die(print_r("Bağlantı Hatası: " . mysqli_connect_errno(), true));
		}
		mysqli_query($link_mysql, "SET NAMES 'utf8'");
		mysqli_query($link_mysql, "SET CHARACTER SET 'utf8_turkish_ci'");
		mysqli_query($link_mysql, "COLLATE 'utf8_turkish_ci'");
		return $link_mysql;
	}

	public function getBusRoutesWithSeats($fromCityId, $toCityId, $departureDate)
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT br.*, from_city.name AS from_city_name, to_city.name AS to_city_name
              FROM bus_routes AS br
              INNER JOIN cities AS from_city ON br.from_city_id = from_city.id
              INNER JOIN cities AS to_city ON br.to_city_id = to_city.id
              WHERE br.from_city_id = $fromCityId AND br.to_city_id = $toCityId
              AND DATE(br.departure_time) = '$departureDate'
              ORDER BY br.departure_time ASC";

		$result = mysqli_query($link_mysql, $query);

		$busRoutes = array();
		$seats = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$query2 = "SELECT *
              FROM seat_availability WHERE bus_route_id = " . $row['id'];
			$result2 = mysqli_query($link_mysql, $query2);

			while ($row2 = mysqli_fetch_assoc($result2)) {
				$seats[] = $row2;
			}
			$busRoutes[] = array(
				'bus' => $row,
				'seat' => $seats
			);
		}

		mysqli_close($link_mysql);

		return $busRoutes;
	}


	public function getCities()
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT id, name FROM cities";
		$result = mysqli_query($link_mysql, $query);

		$cities = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$cities[] = $row;
		}

		mysqli_close($link_mysql);

		return $cities;
	}

	public function getUserInfo($id)
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT * FROM account WHERE id=$id AND isActive = 1";
		$result = mysqli_query($link_mysql, $query);

		$data = mysqli_fetch_assoc($result);
		mysqli_close($link_mysql);

		return $data;
	}

	public function checkLogin($email, $password)
	{
		$link_mysql = $this->mysqlConn();

		$email = mysqli_real_escape_string($link_mysql, $email);
		$password = mysqli_real_escape_string($link_mysql, $password);

		$query = "SELECT id, email, fullName FROM account WHERE email = '$email' AND password = '$password' AND isActive = 1";
		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_num_rows($result) == 1) {
			return mysqli_fetch_assoc($result);
		} else {
			return false;
		}

		mysqli_close($link_mysql);
	}

	public function updateUserInfo($id, $fullName, $tcKimlikNo, $email, $tel, $gender, $birthDate)
	{
		$link_mysql = $this->mysqlConn();

		$id = mysqli_real_escape_string($link_mysql, $id);
		$fullName = mysqli_real_escape_string($link_mysql, $fullName);
		$tcKimlikNo = mysqli_real_escape_string($link_mysql, $tcKimlikNo);
		$email = mysqli_real_escape_string($link_mysql, $email);
		$tel = mysqli_real_escape_string($link_mysql, $tel);
		$gender = mysqli_real_escape_string($link_mysql, $gender);
		$birthDate = mysqli_real_escape_string($link_mysql, $birthDate);

		$query = "UPDATE account SET fullName = '$fullName', tcKimlikNo = '$tcKimlikNo', email = '$email', tel = '$tel', gender = '$gender', birthDate = '$birthDate' WHERE id = $id";
		$result = mysqli_query($link_mysql, $query);

		if ($result) {
			return true;
		} else {
			return false;
		}

		mysqli_close($link_mysql);
	}

	public function updateUserPassword($id, $newPassword)
	{
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE account SET password = '$newPassword' WHERE id = $id";
		$result = mysqli_query($link_mysql, $query);

		if ($result) {
			return true;
		} else {
			return false;
		}
		mysqli_close($link_mysql);
	}

	public function deleteAccount($id)
	{
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE account SET isActive = 0 WHERE id = $id";
		$result = mysqli_query($link_mysql, $query);

		if ($result) {
			return true;
		} else {
			return false;
		}
		mysqli_close($link_mysql);
	}

	public function getUserByEmail($email)
	{
		$link_mysql = $this->mysqlConn();

		$email = mysqli_real_escape_string($link_mysql, $email);

		$query = "SELECT * FROM account WHERE email = '$email'";
		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_num_rows($result) >= 1) {
			return true;
		} else {
			return false;
		}

		mysqli_close($link_mysql);
	}

	public function registerUser($fullName, $email, $birthDate, $gender, $tcKimlikNo, $tel, $password)
	{
		$link_mysql = $this->mysqlConn();

		$fullName = mysqli_real_escape_string($link_mysql, $fullName);
		$email = mysqli_real_escape_string($link_mysql, $email);
		$birthDate = mysqli_real_escape_string($link_mysql, $birthDate);
		$gender = mysqli_real_escape_string($link_mysql, $gender);
		$tcKimlikNo = mysqli_real_escape_string($link_mysql, $tcKimlikNo);
		$tel = mysqli_real_escape_string($link_mysql, $tel);
		$password = mysqli_real_escape_string($link_mysql, $password);

		$query = "INSERT INTO account (fullName, email, birthDate, gender, tcKimlikNo, tel, password, isActive) VALUES ('$fullName', '$email', '$birthDate', '$gender', '$tcKimlikNo', '$tel', '$password', 1)";
		$result = mysqli_query($link_mysql, $query);

		if ($result) {
			return true;
		} else {
			return false;
		}

		mysqli_close($link_mysql);
	}
}
