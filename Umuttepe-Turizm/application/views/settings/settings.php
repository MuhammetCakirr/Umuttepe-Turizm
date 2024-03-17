<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">


	<title>bs4 profile settings page - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
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
	<style type="text/css">
		body {
			background: #eee;
		}

		.widget-author {
			margin-bottom: 2px;
		}

		.author-card {
			position: relative;
			background-color: #fff;
			box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
		}

		.author-card .author-card-cover {
			position: relative;
			width: 100%;
			height: 100px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.author-card .author-card-cover::after {
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			content: '';
			opacity: 0.5;
		}

		.author-card .author-card-cover>.btn {
			position: absolute;
			top: 12px;
			right: 12px;
			padding: 0 10px;
		}

		.author-card .author-card-profile {
			display: table;
			position: relative;
			margin-top: -22px;
			padding-right: 15px;
			padding-bottom: 16px;
			padding-left: 20px;
			z-index: 5;
		}

		.author-card .author-card-profile .author-card-avatar,
		.author-card .author-card-profile .author-card-details {
			display: table-cell;
			vertical-align: middle;
		}

		.author-card .author-card-profile .author-card-avatar {
			width: 85px;
			border-radius: 50%;
			box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
			overflow: hidden;
		}

		.author-card .author-card-profile .author-card-avatar>img {
			display: block;
			width: 100%;
		}

		.author-card .author-card-profile .author-card-details {
			padding-top: 20px;
			padding-left: 15px;
		}

		.author-card .author-card-profile .author-card-name {
			margin-bottom: 2px;
			font-size: 14px;
			font-weight: bold;
		}

		.author-card .author-card-profile .author-card-position {
			display: block;
			color: #8c8c8c;
			font-size: 12px;
			font-weight: 600;
		}

		.author-card .author-card-info {
			margin-bottom: 0;
			padding: 0 25px;
			font-size: 13px;
		}

		.author-card .author-card-social-bar-wrap {
			position: absolute;
			bottom: -18px;
			left: 0;
			width: 100%;
		}

		.author-card .author-card-social-bar-wrap .author-card-social-bar {
			display: table;
			margin: auto;
			background-color: #fff;
			box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
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

		.guncel-bakiye {

			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			font-size: 16px;
		}
	</style>
</head>

<body>

	<div class="container" style="margin-top: 130px;">
		<div class="row">
			<div id="contentPlaceholder" class="col-lg-8" style="background-color:whitesmoke">
				<?php $this->load->view($data['contentPlaceholder'], $data); ?>
			</div>

			<div class="col-lg-4 pb-5">
				<div class="author-card pt-3">
					<div class="author-card-profile">
						<div class="author-card-avatar">
							<img <?php if (isset ($data['user']) && $data['user']['gender'] == 1): ?>
									src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKKOdmJz8Z2pDtYgFgR2u9spABvNNPKYYtGw&usqp=CAU"
								<?php else: ?>
									src="https://banner2.cleanpng.com/20180330/fte/kisspng-computer-icons-female-user-icon-design-clip-art-female-5abec8c6b0f284.1534325015224526787248.jpg"
								<?php endif; ?> alt="Daniel Adams">
						</div>
						<div class="author-card-details">
							<h5 class="author-card-name text-lg">
								<?php echo $this->session->userdata('name'); ?>
							</h5>
							<span class="author-card-position">
								<?php echo $this->session->userdata('email'); ?>
							</span>
						</div>
					</div>

					<div style="display: flex; flex-direction:row; padding-left: 15px; ">
						<p class="guncel-bakiye">Güncel Bakiye: </p>

						<p class="guncel-bakiye">&nbsp 761 </p> <i class="fa-solid fa-turkish-lira-sign"
							style="color: #1e5242; margin: 8px;"></i>
					</div>
				</div>
				<div class="wizard">
					<nav class="list-group list-group-flush" id="wizardNav">
						<a class="list-group-item" href="hesap_bilgilerim">
							Hesap Bilgileri
						</a>
						<a class="list-group-item " href="biletlerim">
							Biletlerim
						</a>


						<a class="list-group-item" href="hesap_bilgilerim">
							Rezervasyonlarım
						</a>
						<a class="list-group-item" href="kayitli_kartlarim">


							Kayıtlı Kartlarım
						</a>
						<a class="list-group-item" href="sifre_degistir">
							Şifremi Değiştir

						</a>
						<a class="list-group-item" href="cikis">
							Çıkış Yap

						</a>
						<a class="list-group-item" href="hesabimi_sil">
							Hesabımı Sil

						</a>
					</nav>
				</div>
			</div>


		</div>
	</div>


	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	</script>
</body>

</html>