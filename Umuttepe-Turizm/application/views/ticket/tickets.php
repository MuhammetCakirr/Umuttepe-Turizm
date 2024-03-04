<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<style>
		select {
			padding: 1em;
			width: 100%;
			border-radius: .2em;
			border: 1px solid #acacac;
			color: #181820;

			appearance: none;
			-webkit-appearance: none;
			-moz-appearance: none;
			-ms-appearance: none;

			background: url('https://cdn1.iconfinder.com/data/icons/arrows-vol-1-4/24/dropdown_arrow-512.png');
			background-repeat: no-repeat;
			background-size: 15px 15px;
			background-position: right;
			background-origin: content-box;
		}

		.gTarih {
			padding: 1em;
			width: 100%;
			border-radius: .2em;
			border: 1px solid #acacac;
			color: #181820;
		}

		.form-control {
			padding: 20px;
		}

		.form-group {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}

		label {
			margin-left: 5px;
			margin-bottom: 5px;
			/* İstediğiniz boşluğu ayarlayabilirsiniz */
		}

		input {
			margin-left: 5px;
			width: 60%;
		}

		.search-button {
			padding: 10px 10px;
			background-color: #3498db;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.flex-container {
			display: flex;
			justify-content: space-between;
			/* Sağa yaslanacak şekilde ayarlandı */
		}

		.card-body {
			display: none;
			margin: 15px;
		}


		.btn-style-1.btn-white {
			background-color: #fff;
		}

		.list-group-item i {
			display: inline-block;
			margin-top: -1px;
			margin-right: 8px;
			font-size: 1.2em;
			vertical-align: middle;
		}

		.mr-1,
		.mx-1 {
			margin-right: .25rem !important;
		}

		.list-group-item.active:not(.disabled) {
			border-color: #e7e7e7;
			background: #fff;
			color: #ac32e4;
			cursor: default;
			pointer-events: none;
		}

		.list-group-flush:last-child .list-group-item:last-child {
			border-bottom: 0;
		}

		.list-group-flush .list-group-item {
			border-right: 0 !important;
			border-left: 0 !important;
		}

		.list-group-flush .list-group-item {
			border-right: 0;
			border-left: 0;
			border-radius: 0;
		}

		.list-group-item.active {
			z-index: 2;
			color: #fff;
			background-color: #007bff;
			border-color: #007bff;
		}

		.list-group-item:last-child {
			margin-bottom: 0;
			border-bottom-right-radius: .25rem;
			border-bottom-left-radius: .25rem;
		}

		a.list-group-item,
		.list-group-item-action {
			color: #404040;
			font-weight: 600;
		}

		.list-group-item {
			padding-top: 16px;
			padding-bottom: 16px;
			-webkit-transition: all .3s;
			transition: all .3s;
			border: 1px solid #e7e7e7 !important;
			border-radius: 0 !important;
			color: #404040;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .08em;
			text-transform: uppercase;
			text-decoration: none;
		}

		.list-group-item {
			position: relative;
			display: block;
			padding: .75rem 1.25rem;
			margin-bottom: -1px;
			background-color: #fff;
			border: 1px solid rgba(0, 0, 0, 0.125);
		}

		.list-group-item.active:not(.disabled)::before {
			background-color: #ac32e4;
		}

		.list-group-item::before {
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 3px;
			height: 100%;
			background-color: transparent;
			content: '';
		}

		.wizard {
			border: 1px solid #ccc;
			margin-bottom: 5px;
		}

		.bilet-container {
			border: 1px solid #000000;
			width: 100%;
			height: 40%;
			background-color: white;
			margin-bottom: 10px;
		}

		.aisle,
		.legend {
			padding: 16px;
			text-align: center;
		}

		.legend span {
			font-size: 16px;
			font-style: italic;
		}

		.bus-row {
			width: 100%;
		}

		.bus-seat {
			font-weight: bold;
			display: inline-block;
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/efGtLJb.png);
			padding-top: 16px;
			text-align: right;
			cursor: pointer;
			font-size: 20px;
			background-repeat: no-repeat;
			background-size: cover;
			/* Resmi boyutlandırma */
		}


		.bus-seat.sold {
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/X1BbzeC.png);
			color: rgba(0, 0, 0, 0);
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.reserved {
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/LXm8GKY.png);
			color: #eee;
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.active {
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/lXv7u3Y.png);
			color: white;
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.otobus {
			border: 1px solid #000000;
			border-radius: 10px;
		}

		.sagkisim {
			border-left: 1px solid #000;

		}

		.sagkisim button {
			align-self: flex-end;
			/* Butonu en altına alır */
		}
	</style>
</head>
<body>
<div class="container" style="margin-top: 130px;">
	<div class="card text-center">
		<div class="card-header" id="toggleButton">
			<ul class="nav nav-pills card-header-pills">
				<li class="nav-item">
					<div class="flex-container">
						<div>
							<strong><?php echo isset($data) ? $data['fromCity'] : ""; ?></strong>
						</div>
						<div>
							<i class="fa-solid fa-van-shuttle"
							   style="color: #000714; font-size: 15px; margin-left: 10px; margin-right:10px"></i>
						</div>
						<div>
							<strong><?php echo $data['toCity']; ?></strong>
						</div>
						<div>
							<i class="fa-solid fa-minus"
							   style="color: #000714; font-size: 15px; margin-left: 10px; margin-right:10px"></i>
						</div>
						<div>
							<strong><?php echo $data['gTarihFormat']; ?></strong>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div>
						<i class="fas fa-caret-down" style="color: #000714; font-size: 15px; margin-left: 10px;"></i>
					</div>
				</li>
			</ul>
		</div>

		<div class="card-body" id="cardBody">
			<div class="card-deck">
				<form class="row" method="post" style="width: 100%;">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="fromCityId"> <strong>Nereden</strong> </label>
							<select class="fromCityId" id="fromCityId" name="fromCityId" required>
								<?php if (isset($data['cities'])) {
									foreach ($data['cities'] as $city): ?>
										<option value="<?php echo $city['id']; ?>"
												style="text-color:black;" <?php echo isset($data['fromCityId']) && $data['fromCityId'] == $city['id'] ? 'selected' : ''; ?>><?php echo $city['name']; ?></option>
									<?php endforeach;
								} ?>
							</select>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="toCityId"> <strong>Nereye</strong> </label>
							<select class="toCityId" id="toCityId" name="toCityId" required>
								<?php foreach ($data['cities'] as $city): ?>
									<option
										value="<?php echo $city['id']; ?>" <?php echo isset($data['toCityId']) && $data['toCityId'] == $city['id'] ? 'selected' : ''; ?>><?php echo $city['name']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="gTarih"> <strong>Gidiş Tarihi</strong> </label>
							<input class="gTarih" type="date" id="gTarih" name="gTarih"
								   value="<?php echo isset($data['gTarih']) ? $data['gTarih'] : date('Y-m-d'); ?>">
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="searchbtn" style="visibility: hidden;"> Button </label>
							<input type="hidden" name="operation" value="searchTicket">
							<button class="search-button" type="submit" style="width:100%;" id="searchbtn">
								<i class="fas fa-search"></i>
								Otobüs Bileti Ara
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>

	<?php foreach ($data['busRoutes'] as $busRoute) {
		$departure_time = date('H:i', strtotime($busRoute['departure_time']));
		$arrival_time = date('H:i', strtotime($busRoute['arrival_time']));
		$duration = gmdate('H:i', strtotime($busRoute['arrival_time']) - strtotime($busRoute['departure_time']));
		$price = isset($busRoute['price']) ? $busRoute['price'] . " TL" : 'Belirtilmemiş';
		?>
		<div class="container" style="margin-top: 30px; margin-bottom: 30px">
			<div>
				<div class="bilet-container text-center" style="padding: 20px;">
					<div class="row">
						<div class="col-lg-2">
							<img src="https://cdn2.enuygun.com/img/company_logos_bus/suha-turizm.png" alt="logo"
								 style="margin-left: 5px;">
						</div>
						<div class="col-lg-3">
							<div
								style="display: flex; flex-direction: row; align-items: center; justify-content: center; margin-top:3px">
								<i class="fa-regular fa-clock"
								   style="color: #000000; font-size:20px; margin-right:2px"></i>
								<p style="font-size: 16px;"><?php echo $departure_time; ?></p>
							</div>
							<p style="font-size: 12px;">(<?php echo $duration; ?>)*</p>
						</div>
						<div class="col-lg-3">
							<div style="display: flex; flex-direction: column; align-items: center;">
								<div style="display: flex; flex-direction: row; align-items: center;">
									<i class="fa-solid fa-chair"
									   style="color: #000000; font-size: 20px; margin-right: 5px;"></i>
									<p style="font-size: 16px;">2+1</p>
								</div>
								<div style="display: flex; flex-direction: row; margin-top: 12px;">
									<p><strong><?php echo $busRoute['from_city_name']; ?></strong></p>
									<i class="fa-solid fa-truck-arrow-right"
									   style="color: #000000; font-size: 18px; margin-left: 3px; margin-right: 3px;"></i>
									<p><strong><?php echo $busRoute['to_city_name']; ?></strong></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2">
							<strong style="font-size: 25px;"><?php echo $price; ?></strong>
						</div>
						<div class="col-lg-2">
							<input type="button" id="koltuksec" value="Koltuk Seç"
								   style="background-color: red; color:white;">
						</div>
					</div>
					<div id="koltuk-sec" style="display:none">
						<div class="row">

							<div class="col-8">
								<div ng-app="app" ng-controller="main" class="otobus">
									<div style="display: flex; flex-direction:row;">
										<img src="assets/img/direksiyon.png" alt=""
											 style="width:30px; height:30px; margin:7px; visibility: hidden; ">
										<?php
										for ($i = 1;
											 $i < 10;
											 $i++) {
											?>
											<div class="aisle">
												<div class="bus-row">
													<div ng-click="selectSeat(seat)" class="bus-seat reserved"
														 ng-repeat="seat in row1"
														 ng-class="{sold: seat.status === 'Sold', reserved: seat.status === 'Reserved', active: seat.number == selectedSeat.number}">
                                                        <span style="color: #000;">
                                                            <?= $i ?>
                                                        </span>
													</div>
												</div>
												<div class="bus-row">
													<div ng-click="selectSeat(seat)" class="bus-seat sold"
														 ng-repeat="seat in row2"
														 ng-class="{sold: seat.status === 'Sold', reserved: seat.status === 'Reserved', active: seat.number == selectedSeat.number}">
                                                        <span style="color: #000;">
                                                            <?= $i + 9 ?>
                                                        </span>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>

									<div style="display: flex; flex-direction:row; margin-top:10px;">
										<img src="assets/img/direksiyon.png" alt=""
											 style="width: 30px; height: 30px; margin: 7px; transform: rotate(-90deg);">

										<?php

										for ($i = 0;
											 $i < 9;
											 $i++) {

											?>

											<div class="aisle">
												<div class="bus-row">
													<div ng-click="selectSeat(seat)" class="bus-seat"
														 ng-repeat="seat in row1"
														 ng-class="{sold: seat.status === 'Sold', reserved: seat.status === 'Reserved', active: seat.number == selectedSeat.number}">
                                                        <span style="color: #000;">
                                                            <?= $i + 19 ?>
                                                        </span>
													</div>
												</div>

											</div>


										<?php } ?>
									</div>

								</div>
								<div style="display: flex; flex-direction:row; margin-top:5px;">
									<i class="fa-solid fa-rectangle-xmark"
									   style="color: #e21212; font-size:22px; margin-right:3px;"></i>
									<p>Biletinizi son 2 saate kadar online iptal edebilirsiniz.</p>
								</div>


								<div class="legend">
									<div class="bus-seat active">&nbsp;</div>
									<span>Seçili</span>
									<div class="bus-seat">&nbsp;</div>
									<span> Müsait</span>
									<div class="bus-seat reserved">&nbsp;</div>
									<span> Rezerve</span>
									<div class="bus-seat sold">&nbsp;</div>
									<span> Dolu</span>
								</div>
							</div>

							<div class="col-4 sagkisim">
								<p>Lütfen Sol kısımdan koltuk seçiniz.</p>
								<div>
									<h4>Seçtiğiniz Koltuklar:</h4>
									<div style="display: flex; flex-direction:row" id="secilikoltuklar">

									</div>

								</div>
								<input type="button" value="Onayla">
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<script src="assets/js/tickets.js"></script>
</body>
</html>
