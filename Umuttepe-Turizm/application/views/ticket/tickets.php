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
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
			border: 2px solid #000000;
			border-radius: 10px;
			box-shadow: 5px 10px #888888;
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
			font-family: "Times New Roman", Times, serif;
		}

		.bus-row {
			width: 100%;
			margin-right: 20px;
		}

		.bus-seat {
			margin-right: 18px;
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
			margin-right: 18px;
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/X1BbzeC.png);
			color: rgba(0, 0, 0, 0);
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.reserved {
			margin-right: 18px;
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/LXm8GKY.png);
			color: #eee;
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.active {
			margin-right: 18px;
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/lXv7u3Y.png);
			color: white;
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.soldd {
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/X1BbzeC.png);
			color: rgba(0, 0, 0, 0);
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.reservedd {
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/LXm8GKY.png);
			color: #eee;
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
		}

		.bus-seat.activee {

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

		.modal-confirm {
			color: #636363;

			margin: auto;
			position: fixed;
			top: 20%;
			/* Sayfanın yüzde 40'ında başlat */
			left: 40%;

			z-index: 9999;
			/* Modal pencerenin diğer elemanların üzerine gelmesi için */
		}

		.modal-confirm .modal-content {
			padding: 20px;
			border-radius: 5px;
			border: none;
		}

		.modal-confirm .modal-header {
			border-bottom: none;
			position: relative;
		}

		.modal-confirm h4 {
			text-align: center;
			font-size: 26px;
			margin: 30px 0 -15px;
		}

		.modal-confirm .form-control,
		.modal-confirm .btn {
			min-height: 40px;
			border-radius: 3px;
		}

		.modal-confirm .close {
			position: absolute;
			top: -5px;
			right: -5px;
		}

		.modal-confirm .modal-footer {
			border: none;
			text-align: center;
			border-radius: 5px;
			font-size: 13px;
		}

		.modal-confirm .icon-box {
			color: #fff;
			position: absolute;
			margin: 0 auto;
			left: 0;
			right: 0;
			top: -70px;
			width: 95px;
			height: 95px;
			border-radius: 50%;
			z-index: 9;
			background: #ef513a;
			padding: 15px;
			text-align: center;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
		}

		.modal-confirm .icon-box i {
			font-size: 56px;
			position: relative;
			top: 4px;
		}

		.modal-confirm .btn {
			color: #fff;
			border-radius: 4px;
			background: #ef513a;
			text-decoration: none;
			transition: all 0.4s;
			line-height: normal;
			border: none;
		}

		.modal-confirm .btn:hover,
		.modal-confirm .btn:focus {
			background: #da2c12;
			outline: none;
		}


		@media (max-width: 768px) {
			.otobus {
				overflow-x: auto;
				/* Sağa doğru kaydırma için */
				white-space: nowrap;
				/* Satır atlamayı engelle */
				width: 100%;
				/* Genişliği 100% olarak ayarla */
			}

			.modal-confirm {
				color: #636363;
				margin: auto;
				position: fixed;
				top: 20%;
				/* Sayfanın yüzde 40'ında başlat */
				left: 0%;
				width: 100%;
				z-index: 9999;
				/* Modal pencerenin diğer elemanların üzerine gelmesi için */
			}


		}

		#onaylabtn {
			border-radius: 8px;
			/* Örneğin 8px olarak ayarladım, ihtiyacınıza göre ayarlayabilirsiniz */
			background-color: slategray;
			/* Örneğin mavi renk, ihtiyacınıza göre ayarlayabilirsiniz */
			color: #ffffff;
			/* Beyaz renk, metin rengini ihtiyacınıza göre ayarlayabilirsiniz */
		}

		#koltuksecbtn {
			
			border-radius: 8px;
			/* Örneğin 8px olarak ayarladım, ihtiyacınıza göre ayarlayabilirsiniz */
			background-color: slategray;
			/* Örneğin mavi renk, ihtiyacınıza göre ayarlayabilirsiniz */
			color: #ffffff;
			/* Beyaz renk, metin rengini ihtiyacınıza göre ayarlayabilirsiniz */
		}
		.fromcityp{
			font-size: 22px;
			font-family: "Lucida Console", "Courier New", monospace;
		}
		.bilet-iptal-p{
			
			font-family: "Times New Roman", Times, serif;
		}
		.koltuk-seciniz-p{
			font-size: 18px;
			font-family: "Times New Roman", Times, serif;
		}
	</style>


</head>

<body>

	<!--Error Dialog-->
	<div id="myModal" class="modal col-lg-12 col-md-12 col-sm-12">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box">
						<i class="material-icons">&#xE5CD;</i>
					</div>
					<h4 class="modal-title">HATA!</h4>
				</div>
				<div class="modal-body">
					<p class="text-center">Tek seferde en fazla 4 koltuk seçebilirsiniz.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger btn-block" data-dismiss="modal">Kapat</button>
				</div>
			</div>
		</div>
	</div>
	<!--Error Dialog End-->

	<!--Warning Dialog-->
		<div id="myModalrez" class="modal col-lg-12 col-md-12 col-sm-12">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
					</div>
				</div>
				<div class="modal-body">
					<p class="text-center">Bu koltuk başka bir kişi tarafından rezerve edilmiştir.Lütfen boş (beyaz renkli) koltuklardan birini seçin.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-warning btn-block" data-dismiss="modal">Kapat</button>
				</div>
			</div>
		</div>
	</div>
	<!--Error Dialog End-->

	<!--Warning Dialog-->
		<div id="myModaldolu" class="modal col-lg-12 col-md-12 col-sm-12">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box">
						<i class="material-icons">&#xE5CD;</i>
					</div>
					
				</div>
				<div class="modal-body">
					<p class="text-center">Seçtiğiniz koltuk zaten alınmış, lütfen boş (beyaz renkli) koltuklardan birini seçin.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger btn-block" data-dismiss="modal">Kapat</button>
				</div>
			</div>
		</div>
	</div>
	<!--Error Dialog End-->


	<div class="container" style="margin-top: 130px;">
		<div class="card text-center">
			<div class="card-header" id="toggleButton">
				<ul class="nav nav-pills card-header-pills">
					<li class="nav-item">
						<div class="flex-container">
							<div>
								<strong>
									<?php echo isset($data) ? $data['fromCity'] : ""; ?>
								</strong>
							</div>
							<div>
								<i class="fa-solid fa-van-shuttle"
									style="color: #000714; font-size: 15px; margin-left: 10px; margin-right:10px"></i>
							</div>
							<div>
								<strong>
									<?php echo $data['toCity']; ?>
								</strong>
							</div>
							<div>
								<i class="fa-solid fa-minus"
									style="color: #000714; font-size: 15px; margin-left: 10px; margin-right:10px"></i>
							</div>
							<div>
								<strong>
									<?php echo $data['gTarihFormat']; ?>
								</strong>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div>
							<i class="fas fa-caret-down"
								style="color: #000714; font-size: 15px; margin-left: 10px;"></i>
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
											<option value="<?php echo $city['id']; ?>" style="text-color:black;" <?php echo isset($data['fromCityId']) && $data['fromCityId'] == $city['id'] ? 'selected' : ''; ?>>
												<?php echo $city['name']; ?>
											</option>
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
										<option value="<?php echo $city['id']; ?>" <?php echo isset($data['toCityId']) && $data['toCityId'] == $city['id'] ? 'selected' : ''; ?>>
											<?php echo $city['name']; ?>
										</option>
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
			$busRouteBus = $busRoute['bus'];
			$busRouteSeat = $busRoute['seat'];
			$departure_time = date('H:i', strtotime($busRouteBus['departure_time']));
			$arrival_time = date('H:i', strtotime($busRouteBus['arrival_time']));
			$duration = gmdate('H:i', strtotime($busRouteBus['arrival_time']) - strtotime($busRouteBus['departure_time']));
			$price = isset($busRouteBus['price']) ? $busRouteBus['price'] . " TL" : 'Belirtilmemiş';
			$id = $busRouteBus['id'];
			$j = 0;
			?>
			<form action="buying" method="post">
				<div class="container" style="margin-top: 30px; margin-bottom: 30px">
					<div>
						<div class="bilet-container text-center" style="padding: 20px;">
							<div class="row">
								<div class="col-lg-2 col-sm-12">
									<img src="https://cdn2.enuygun.com/img/company_logos_bus/suha-turizm.png" alt="logo"
										style="margin-left: 5px;">
								</div>
								<div class="col-lg-3 col-sm-12">
									<div
										style="display: flex; flex-direction: row; align-items: center; justify-content: center; margin-top:3px">
										<i class="fa-regular fa-clock"
											style="color: #000000; font-size:20px; margin-right:5px"></i>
										<p style="font-size: 16px;">
											<?php echo $busRouteBus['from_city_name']. " - "  .$departure_time; ?>
										</p>
									</div>
									<p style="font-size: 12px;">(
										<?php echo $busRouteBus['to_city_name']. "" .$duration; ?>)*
									</p>
								</div>
								<div class="col-lg-3 col-sm-12">
									<div style="display: flex; flex-direction: column; align-items: center;">
										<div style="display: flex; flex-direction: column; align-items: center;">
											<img src="assets/img/seat.png" style="height: 10%; width:10%;" alt="">
											<p style="font-size: 16px; margin-left:5px;">2+1</p>
										</div>
										<div style="display: flex; flex-direction: row; margin-top: 12px;">
											<p class="fromcityp"><strong>
													<?php echo $busRouteBus['from_city_name']; ?>
												</strong></p>
											<i class="fa-solid fa-route"
												style="color: #3d4c66; font-size: 28px; margin-left: 7px; margin-right: 7px;"></i>
											<p class="fromcityp"><strong>
													<?php echo $busRouteBus['to_city_name']; ?>
												</strong></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-sm-6">
									<strong style="font-size: 25px;">
										<?php echo $price; ?>
									</strong>
								</div>
								<div class="col-lg-2 col-sm-6">
									<input type="button" id="koltuksecbtn" value="Koltuk Seç"
										data-content="<?php echo $id; ?>">
								</div>
							</div>
							<div id="koltuk-sec-div<?php echo $id; ?>" style="display:none">
								<div class="row">

									<div class="col-lg-8  col-sm-12">
										<div ng-app="app" ng-controller="main" class="otobus">
											<div style="display: flex; flex-direction: row;">
												<img src="assets/img/direksiyon.png" alt=""
													style="width:30px; height:30px; margin:7px; visibility: hidden;">
												<div class="aisle">
													<div class="bus-row">
														<?php
														for ($j = 1; $j < 10; $j++) {
															?>
															<div
																class="bus-seat <?php echo $busRouteSeat[$j - 1]['seat_status'] == 1 ? "" : ($busRouteSeat[$j - 1]['seat_status'] == 2 ? "sold" : "reserved"); ?>">
																<span style="color: #000;">
																	<?= $busRouteSeat[$j - 1]['seat_number'] ?>
																</span>
															</div>
															<?php
														} ?>
													</div>
													<div class="bus-row">
														<?php
														for ($j = 10; $j < 19; $j++) {
															?>
															<div ng-click="selectSeat(seat)"
																class="bus-seat <?php echo $busRouteSeat[$j - 1]['seat_status'] == 1 ? "" : ($busRouteSeat[$j - 1]['seat_status'] == 2 ? "sold" : "reserved"); ?>"
																ng-repeat="seat in row2">
																<span style="color: #000;">
																	<?= $busRouteSeat[$j - 1]['seat_number'] ?>
																</span>
															</div>
														<?php } ?>
													</div>
												</div>
											</div> <!-- End of flex row -->
											<div style="display: flex; flex-direction: row; margin-top:10px;">
												<img src="assets/img/direksiyon.png" alt=""
													style="width: 30px; height: 30px; margin: 7px; transform: rotate(-90deg);">
												<div class="aisle">
													<div class="bus-row">
														<?php
														for ($j = 19; $j < 28; $j++) {
															?>
															<div ng-click="selectSeat(seat)"
																class="bus-seat <?php echo $busRouteSeat[$j - 1]['seat_status'] == 1 ? "" : ($busRouteSeat[$j - 1]['seat_status'] == 2 ? "sold" : "reserved"); ?>"
																ng-repeat="seat in row1"
																ng-class="{sold: seat.status === 'Sold', reserved: seat.status === 'Reserved', active: seat.number == selectedSeat.number}">
																<span style="color: #000;">
																	<?= $busRouteSeat[$j - 1]['seat_number'] ?>
																</span>
															</div>
														<?php }
														?>
													</div>
												</div>
											</div>
										</div>
										<div style="display: flex; flex-direction:row; margin-top:5px;">
											<i class="fa-solid fa-rectangle-xmark"
												style="color: #e21212; font-size:22px; margin-right:3px;"></i>
											<p class="bilet-iptal-p" >Biletinizi son 2 saate kadar online iptal edebilirsiniz.</p>
										</div>


										<div class="legend">
											<div class="bus-seat activee"></div>
											<span>Seçili</span>
											<div class="bus-seat"></div>
											<span>Müsait</span>
											<div class="bus-seat reservedd"></div>
											<span>Rezerve</span>
											<div class="bus-seat soldd"></div>
											<span>Dolu</span>
										</div>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12 sagkisim">
										<p id="koltuk-seciniz-p" class="koltuk-seciniz-p" >Lütfen Sol kısımdan koltuk seçiniz.</p>
										<div>
											<h4 id="secilen-koltuklar" >Seçtiğiniz Koltuklar:</h4>
											<div style="display: flex; flex-direction:row"
												id="secilikoltuklar<?php echo $id; ?>">

											</div>

										</div>

										<input  id="onaylabtn" type="submit" value="Onayla" data-content="<?php echo $id ?>">

										<input type="hidden" value="<?php echo $id ?>" name="id">
										<input type="hidden" value="" name="seat_numbers">
										<input type="hidden" value="buying" name="operation">



									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		<?php } ?>

	</div>


	<script src="assets/js/tickets.js"></script>
</body>

</html>