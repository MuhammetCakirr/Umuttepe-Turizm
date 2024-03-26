<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>About</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

	<style>

.counter-section i { display:block; margin:0 0 10px}
.counter-section span.counter { font-size:40px; color:#000; line-height:60px; display:block; font-family: "Oswald",sans-serif; letter-spacing: 2px}
.counter-title{ font-size:12px; letter-spacing:2px; text-transform: uppercase}
.counter-icon {top:25px; position:relative}
.counter-style2 .counter-title {letter-spacing: 0.55px; float: left;}
.counter-style2 span.counter {letter-spacing: 0.55px; float: left; margin-right: 10px;}
.counter-style2 i {float: right; line-height: 26px; margin: 0 10px 0 0}
.counter-subheadline span {float: right;}  

.medium-icon {
    font-size: 40px !important;
    margin-bottom: 15px !important;
} 

/*PEN STYLES*/





.blog-card {
  width: 100%;
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(#000, .1);
  margin-bottom: 1.6%;
  background-color: white;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
 
  .meta {
    position: relative;
    z-index: 0;
    height: 200px;
  }
  .photo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    transition: transform .2s;
  }

  .description {
    padding: 1rem;
    background: $color_white;
    position: relative;
    z-index: 1;
    h1,
    h2 {
      font-family: Poppins, sans-serif;
    }
    h1 {
      line-height: 1;
      margin: 0;
      font-size: 1.7rem;
    }
    h2 {
      font-size: 1rem;
      font-weight: 300;
      text-transform: uppercase;
      color: $color_grey_dark;
      margin-top: 5px;
    }
    .read-more {
      text-align: right;
      a {
        color: $color_prime;
        display: inline-block;
        position: relative;
        &:after {
          content: "\f061";
          font-family: FontAwesome;
          margin-left: -10px;
          opacity: 0;
          vertical-align: middle;
          transition: margin .3s, opacity .3s;
        }

        
      }
    }
  }
  p {
    position: relative;
    margin: 1rem 0 0;
    &:first-of-type {
      margin-top: 1.25rem;
      &:before {
        content: "";
        position: absolute;
        height: 5px;
        background: $color_prime;
        width: 35px;
        top: -0.75rem;
        border-radius: 3px;
      }
    }
  }
  &:hover {
    .details {
      left: 0%;
    }
  }


  @media (min-width: 640px) {
    flex-direction: row;
    max-width: 950px;
    .meta {
      flex-basis: 40%;
      height: auto;
    }
    .description {
      flex-basis: 60%;
      &:before {
        transform: skewX(-3deg);
        content: "";
        background: #fff;
        width: 30px;
        position: absolute;
        left: -10px;
        top: 0;
        bottom: 0;
        z-index: -1;
      }
    }
    &.alt {
      flex-direction: row-reverse;
      .description {
        &:before {
          left: inherit;
          right: -10px;
          transform: skew(3deg)
        }
      }
      .details {
        padding-left: 25px;
      }
    }
  }
}


	</style>

	<script>
  
	</script>
</head>
<body style="background-color:whitesmoke ;">
	

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Arka Planımız ve Hikayemiz</p>
						<h1>Hakkımızda</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	<section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
          
                <div class="row" style="margin-top:40px;" >
                    <!-- counter -->
                    <div class="col-md-3 col-sm-12 mb-3 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated " data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
					<i class="fa-solid fa-city medium-icon" style="color: #01060e;"></i>
                        <span id="anim-number-pizza" class="counter-number"></span>
                        <span class="timer counter alt-font appear" data-to="980" data-speed="7000">2800</span>
                        <p class="counter-title">Şehir Çeşitliliği</p>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-12 mb-3 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated " data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
					<i class="fa-solid fa-bus-simple medium-icon" style="color: #010005;"></i>
                         <span class="timer counter alt-font appear" data-to="980" data-speed="7000">980</span>
                        <span class="counter-title">Otobüs Sayımız</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-12 mb-3 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated " data-wow-duration="300ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
					<i class="fa-solid fa-school-circle-check medium-icon" style="color: #000000;"></i>
                         <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span>
                        <span class="counter-title">Şube Sayımız</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-12 mb-3 text-center counter-section wow fadeInUp animated " data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
					<i class="fa-solid fa-face-laugh-wink medium-icon" style="color: #000000;"></i>
                         <span class="timer counter alt-font appear" data-to="600" data-speed="7000">600</span>
                        <span class="counter-title">Mutlu Müşteri</span>
                    </div>
                    <!-- end counter -->
                </div>
            
                <div class="blog-card" >
		<div class="meta">
			<div class="photo" style="background-image: url(../assets/img/bus1.jpg)"></div>
		</div>	
		<div class="description">
			<h1>Şirket Hikayemiz</h1>
			<p>1980 yılında kurulan şirketimiz, uzun yıllardır müşterilerimize kaliteli ve güvenli seyahat imkanı sunmaktadır.
      Başlangıcımızdan bu yana, misafirlerimizin memnuniyetini en ön planda tutarak hizmet veriyoruz.
      40 yılı aşkın bir süredir sektörde liderliğimizi sürdürüyor ve müşterilerimize unutulmaz seyahat deneyimleri yaşatmaya devam ediyoruz.
      Uzman kadromuz ve modern filomuzla, güvenli ve konforlu bir yolculuk vadeden bir marka olarak tanınıyoruz.</p>

		</div>
  	</div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(../assets/img/sliderdeneme7.png)"></div>

    </div>
    <div class="description">
      <h1>Misyonumuz ve Vizyonumuz</h1>
      <p> Vizyonumuz, seyahat deneyimlerini zenginleştirerek müşterilerimize unutulmaz anlar yaşatmaktır.
      Her bir seyahatin özel ve anlamlı olmasını sağlamak için sürekli olarak kendimizi geliştiriyoruz.
      Misyonumuz ise güvenilir, konforlu ve zamanında seyahat imkanları sunarak müşteri memnuniyetini sağlamaktır.
      Müşterilerimizin beklentilerini aşarak, sektördeki standartları belirleyen bir marka olma yolunda ilerliyoruz.</p>

    </div>
  </div>
	</section>




	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
		<h3 class="text-center">İşbirliği yaptığımız Firmalar</h3>
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->


	<!-- about js -->
	<script src="assets/js/about_page.js"></script>

</body>
</html>