<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
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
</head>
<body>

    <!--PreLoader-->
    <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->

    <!-- Header Kısmı -->
    <header>
        
	
        <div class="top-header-area" id="sticker">
            <div class="container">    
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="main-menu-wrap">
                            <!-- logo -->
                            <div class="site-logo">
                                <a href="index">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                            </div>
                            <!-- logo -->

                            <!-- menu start -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="current-list-item"><a href="index">Anasayfa</a>
                                    </li>
                                    <li><a href="about">Hakkımızda</a></li>
                                    <li><a href="#">Sayfalar</a>
                                        <ul class="sub-menu">
                                            <li><a href="404">404 page</a></li>
                                            <li><a href="about">About</a></li>
                                            <li><a href="cart">Cart</a></li>
                                            <li><a href="checkout">Check Out</a></li>
                                            <li><a href="contact">Contact</a></li>
                                            <li><a href="news">News</a></li>
                                            <li><a href="shop">Shop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news.html">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="news">News</a></li>
                                            <li><a href="single-news">Single News</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact">İletişim</a></li>
                                    <li><a href="shop">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop">Shop</a></li>
                                            <li><a href="checkout">Check Out</a></li>
                                            <li><a href="single-product">Single Product</a></li>
                                            <li><a href="cart">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="header-icons">
                                            <a class="shopping-cart" href="cart"><i class="fas fa-shopping-cart"></i></a>
                                            <a href="login">Giriş Yap</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                            <div class="mobile-menu"></div>
                            <!-- menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header Kısmı Bitiş -->

    <!-- Body İçeriği -->
    <?php $this->load->view($content); ?>
    <!-- Body İçeriği Bitiş -->

    <!-- footer -->
    <footer>
    <div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Hakkımızda</h2>
						<p>1980 yılında kurulan şirketimiz, uzun yıllardır müşterilerimize kaliteli ve güvenli seyahat imkanı sunmaktadır.
      Başlangıcımızdan bu yana, misafirlerimizin memnuniyetini en ön planda tutarak hizmet veriyoruz.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">İletişim Bilgileri</h2>
						<ul>
							<li> Kabaoğlu, 41001 İzmit/Kocaeli</li>
							<li>bilgi@umuttepeturizm.com</li>
							<li>+90 548 453 34 45</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Sayfalar</h2>
						<ul>
							<li><a href="index">Anasayfa</a></li>
							<li><a href="about">Hakkımızda</a></li>
							<li><a href="services">Shop</a></li>
							<li><a href="news">News</a></li>
							<li><a href="contact">İletişim</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Üye Ol</h2>
						<p>Seyahat deneyimlerinizi daha özel ve avantajlı hale getirmek için bize katılın! Üye olun ve birbirinden özel fırsatlardan yararlanın.</p>
						<form action="index">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    </footer>
	<!-- end footer -->



    <!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->


    <!-- jquery -->
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
</body>
</html>