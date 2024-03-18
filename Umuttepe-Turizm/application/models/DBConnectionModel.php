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

	public function cron(){
		$link_mysql = $this->mysqlConn();

		// Önce bugünün tarihini alalım
		$today = date('Y-m-d');

		// Bugün için bus_routes tablosunda kayıtlı bir rota olup olmadığını kontrol edelim
		$check_query = "SELECT COUNT(*) as count FROM bus_routes WHERE departure_date = '$today'";
		$check_result = mysqli_query($link_mysql, $check_query);
		$row = mysqli_fetch_assoc($check_result);
		$count = $row['count'];

		// Eğer bu gün için kayıt yoksa, yeni kayıtları oluşturalım
		if($count == 0) {
			$insert_query = "
            INSERT INTO bus_routes (routes_id, departure_date, isActive)
            SELECT id, DATE_ADD(CURRENT_DATE(), INTERVAL n DAY), 1
            FROM routes, (SELECT 0 n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4) numbers;
            
            INSERT INTO seat_availability (bus_route_id, seat_number, seat_status)
            SELECT id, n, 1
            FROM bus_routes
            CROSS JOIN (SELECT n FROM (SELECT 1 AS n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12 UNION SELECT 13 UNION SELECT 14 UNION SELECT 15 UNION SELECT 16 UNION SELECT 17 UNION SELECT 18 UNION SELECT 19 UNION SELECT 20 UNION SELECT 21 UNION SELECT 22 UNION SELECT 23 UNION SELECT 24 UNION SELECT 25 UNION SELECT 26 UNION SELECT 27) AS numbers) nums;
        ";
			mysqli_multi_query($link_mysql, $insert_query);
		}
	}


	public function getBakiye($id)
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT bakiye FROM account WHERE id = '$id'";

		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			mysqli_close($link_mysql);
			return $row['bakiye'];
		} else {
			mysqli_close($link_mysql);
			return null; // Eğer böyle bir kullanıcı yoksa veya bakiye bulunamazsa null dönebiliriz.
		}
	}


	public function getTarife()
	{
		$link_mysql = $this->mysqlConn();
		$query = "SELECT * FROM tarife ";
		$result = mysqli_query($link_mysql, $query);

		$tarife = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$tarife[] = $row;
		}

		return $tarife;
	}

	public function changeBakiye($account_id, $bakiye)
	{
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE account SET bakiye = $bakiye WHERE id = $account_id";

		$result = mysqli_query($link_mysql, $query);
		mysqli_close($link_mysql);

		return $result;
	}

	public function changeSeatStatus($id, $status)
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT bus_route_id FROM tickets WHERE id = $id";

		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$bus_route_id = $row['bus_route_id'];
			$query2 = "SELECT seat_number FROM passenger WHERE ticket_id = $id";
			$result2 = mysqli_query($link_mysql, $query2);

			if ($result2 && mysqli_num_rows($result2) > 0) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$seat_number = $row2['seat_number'];
					$query3 = "UPDATE seat_availability SET seat_status = $status WHERE bus_route_id = $bus_route_id AND seat_number = $seat_number";
					$result3 = mysqli_query($link_mysql, $query3);
				}
			}
		}

		mysqli_close($link_mysql);
	}

	public function changeTicketStatus($id, $status)
	{
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE tickets SET status = $status WHERE id = $id";

		$result = mysqli_query($link_mysql, $query);

		mysqli_close($link_mysql);

		return $result;
	}

	public function getTicketByTicketId($ticketId)
	{
		$link_mysql = $this->mysqlConn();
		$query = "SELECT price ,status,id
              FROM tickets 
              WHERE id = $ticketId";

		$result = mysqli_query($link_mysql, $query);

		$ticket = array();
		if ($row = mysqli_fetch_assoc($result)) {
			return $row;
		}

		mysqli_close($link_mysql);

		return $ticket;
	}


	public function getTicketById($id)
	{
		$link_mysql = $this->mysqlConn();
		$query = "SELECT t.*,br.departure_date,br.created_at,r.departure_time,r.arrival_time,r.price,r.bus_plate_code,from_city.name as from_city_name ,to_city.name as to_city_name,br.isActive 
			  FROM tickets as t
              INNER JOIN bus_routes as br on br.id = t.bus_route_id 
              INNER JOIN routes as r on r.id = br.routes_id  
              INNER JOIN cities AS from_city ON r.from_city_id = from_city.id
              INNER JOIN cities AS to_city ON r.to_city_id = to_city.id
              WHERE account_id = $id ORDER BY t.created_at DESC";

		$result = mysqli_query($link_mysql, $query);

		$tickets = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$query2 = "SELECT p.name,p.surname,p.tc,p.gender,p.seat_number,p.birthday,p.tarife as tarife,ta.name as tarife_name FROM passenger as p 
    					INNER JOIN tickets as t on t.id = p.ticket_id
    					INNER JOIN tarife as ta on ta.id = p.tarife";

			$result2 = mysqli_query($link_mysql, $query2);
			$passengers = array();
			while ($row2 = mysqli_fetch_assoc($result2)) {
				$passengers[] = $row2;
			}
			$row['passenger'] = $passengers;
			$tickets[] = $row;
		}
		$data = $tickets;
		mysqli_close($link_mysql);

		return $data;
	}

	public function createTicket($id, $busRouteId, $contactFullName, $contactTel, $cartFullName, $cartNo, $cartMonth, $cartYear, $cartCvc, $price, $buying)
	{
		$link_mysql = $this->mysqlConn();

		// Türkiye saatiyle ilgili zaman dilimini ayarla
		date_default_timezone_set('Europe/Istanbul');

		// Plaka Kodunu Çekme
		$query = "SELECT c.plate_code, br.departure_date ,r.departure_time, r.bus_plate_code FROM bus_routes AS br
				  INNER JOIN routes AS r ON r.id = br.routes_id
				  INNER JOIN cities AS c ON r.from_city_id = c.id
				  WHERE br.id = $busRouteId";

		$result = mysqli_query($link_mysql, $query);
		$row = mysqli_fetch_assoc($result);
		$plateCode = $row['plate_code'];


		// Öğleden Önce veya Sonra Bilgisini Belirleme
		$departureTime = $row['departure_time'];
		$timeOfDay = (date('H', strtotime($departureTime)) < 12) ? "OO" : "OS";

		// Bilet Satış Zamanını Oluşturma
		$saleTime = date('dmYHis');

		// Peron Numarasını Oluşturma
		$peronNumarasi = chr(rand(65, 90)); // A'dan Z'ye rastgele bir harf seçme

		// Seferi Yapan Otobüsün Plakasını Alma
		$busPlateCode = $row['bus_plate_code'];

		// PNR Kodunu Oluşturma
		$pnr = $plateCode . $timeOfDay . $saleTime . $peronNumarasi . $busPlateCode;

		$query = "INSERT INTO tickets (account_id,bus_route_id, contact_full_name, contact_tel, cart_no, cart_full_name, cart_month, cart_year, cart_cvc, price, status,pnr, created_at)
		VALUES ($id,$busRouteId, '$contactFullName', '$contactTel','$cartNo', '$cartFullName', '$cartMonth', '$cartYear', '$cartCvc', $price , $buying, '$pnr',CURRENT_TIMESTAMP)";

		$bakiye = $this->getBakiye($id);
		$bakiye = $bakiye > $price ? $bakiye - $price : 0;
		$this->changeBakiye($id,$bakiye);

		mysqli_query($link_mysql, $query);

		return mysqli_insert_id($link_mysql);

		mysqli_close($link_mysql);
	}

	public function createPassenger($ticketId, $passengerName, $passengerSurname, $passengerTc, $passengeSelector, $seatNumber, $tarife, $birthday)
	{
		$link_mysql = $this->mysqlConn();

		$query = "INSERT INTO passenger (ticket_id, name, surname, tc, gender,seat_number,created_at,tarife,birthday)
		VALUES ($ticketId, '$passengerName', '$passengerSurname','$passengerTc', $passengeSelector,$seatNumber, CURRENT_TIMESTAMP,$tarife,'$birthday')";

		$result = mysqli_query($link_mysql, $query);

		mysqli_close($link_mysql);

		return $result;
	}

	public function changeSeatAvailability($busRouteId, $seatNumber, $status)
	{
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE seat_availability SET  seat_status = $status WHERE bus_route_id = $busRouteId AND seat_number = $seatNumber";

		$result = mysqli_query($link_mysql, $query);

		mysqli_close($link_mysql);

		return $result;
	}

	public function getBusRoute($id)
	{
		$link_mysql = $this->mysqlConn();
		$query = "SELECT br.departure_date,br.id as bus_routes_id,r.id as routes_id,r.departure_time,r.arrival_time,r.price,r.bus_plate_code,
       		  from_city.name AS from_city_name, to_city.name AS to_city_name
              FROM bus_routes AS br
              INNER JOIN routes AS r ON r.id = br.routes_id
              INNER JOIN cities AS from_city ON r.from_city_id = from_city.id
              INNER JOIN cities AS to_city ON r.to_city_id = to_city.id
              WHERE br.id = $id";

		$result = mysqli_query($link_mysql, $query);

		$data = mysqli_fetch_assoc($result);
		mysqli_close($link_mysql);

		return $data;
	}

	public function getBusRoutesWithSeats($fromCityId, $toCityId, $departureDate)
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT br.departure_date,br.id as bus_routes_id,r.id as routes_id,r.departure_time,r.arrival_time,r.price,r.bus_plate_code, 
       				from_city.name AS from_city_name, to_city.name AS to_city_name , from_city.plate_code AS plate_code 
					FROM bus_routes AS br INNER JOIN routes AS r ON r.id = br.routes_id 
					    INNER JOIN cities AS from_city ON r.from_city_id = from_city.id 
					    INNER JOIN cities AS to_city ON r.to_city_id = to_city.id 
					WHERE r.from_city_id = $fromCityId AND r.to_city_id = $toCityId AND DATE(br.departure_date) = '$departureDate' 
					AND br.isActive = 1 ORDER BY r.departure_time ASC;";

		$result = mysqli_query($link_mysql, $query);

		$busRoutes = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$query2 = "SELECT seat_number, seat_status
                   FROM seat_availability
                   WHERE bus_route_id = '" . $row['bus_routes_id'] . "'";
			$result2 = mysqli_query($link_mysql, $query2);

			$seats = array();
			while ($row2 = mysqli_fetch_assoc($result2)) {
				$seats[] = $row2;

			}

			$busRoutes[] = array(
				'bus' => $row,
				'seats' => $seats
			);
		}

		mysqli_close($link_mysql);

		return $busRoutes;
	}


	public function getRoutes()
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT br.*, from_city.name AS from_city_name, to_city.name AS to_city_name , from_city.plate_code AS plate_code
              FROM routes AS br
              INNER JOIN cities AS from_city ON br.from_city_id = from_city.id
              INNER JOIN cities AS to_city ON br.to_city_id = to_city.id
              ORDER BY br.departure_time ASC";

		$result = mysqli_query($link_mysql, $query);

		$busRoutes = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$busRoutes[] = $row;
		}

		mysqli_close($link_mysql);

		return $busRoutes;
	}

	public function getCities()
	{
		$link_mysql = $this->mysqlConn();

		$query = "SELECT * FROM cities";
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

		$query = "SELECT id, email, fullName, password FROM account WHERE email = '$email' AND isActive = 1";
		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_num_rows($result) == 1) {
			$user = mysqli_fetch_assoc($result);

			$hashedPasswordFromDB = $user['password'];

			if (password_verify($password, $hashedPasswordFromDB)) {
				mysqli_close($link_mysql);
				unset($user['password']);
				return $user;
			}
		}

		mysqli_close($link_mysql);
		return false;
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

		$newPassword = mysqli_real_escape_string($link_mysql, $newPassword);
		$hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

		$query = "UPDATE account SET password = '$hashedNewPassword' WHERE id = $id";

		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_affected_rows($link_mysql) > 0) {
			mysqli_close($link_mysql);
			return true;
		} else {
			mysqli_close($link_mysql);
			return false;
		}
	}


	public function setBusPlateCode($plate, $id)
	{
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE routes SET bus_plate_code = '$plate' WHERE id = $id";
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

		// Şifrelenmiş şifreyi oluştur
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		// Güvenlik amacıyla kullanıcı girişi değerlerini filtrele
		$fullName = mysqli_real_escape_string($link_mysql, $fullName);
		$email = mysqli_real_escape_string($link_mysql, $email);
		$birthDate = mysqli_real_escape_string($link_mysql, $birthDate);
		$gender = mysqli_real_escape_string($link_mysql, $gender);
		$tcKimlikNo = mysqli_real_escape_string($link_mysql, $tcKimlikNo);
		$tel = mysqli_real_escape_string($link_mysql, $tel);

		// SQL sorgusunu oluştur
		$query = "INSERT INTO account (fullName, email, birthDate, gender, tcKimlikNo, tel, password, isActive) 
              VALUES ('$fullName', '$email', '$birthDate', '$gender', '$tcKimlikNo', '$tel', '$hashedPassword', 1)";

		// Sorguyu çalıştır ve sonucu kontrol et
		$result = mysqli_query($link_mysql, $query);

		// Sonucu değerlendir ve işlem başarılı ise true döndür
		if ($result) {
			mysqli_close($link_mysql);
			return true;
		} else {
			mysqli_close($link_mysql);
			return false;
		}
	}
}
