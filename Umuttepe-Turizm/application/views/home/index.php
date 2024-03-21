<!DOCTYPE html>
<html lang="en">
<style>
	.l-radio {
		padding: 6px;
		border-radius: 50px;
		display: inline-flex;
		cursor: pointer;
		transition: background 0.2s ease;
		margin: 8px 0;
		-webkit-tap-highlight-color: transparent;
	}

	.l-radio:hover,
	.l-radio:focus-within {
		background: rgba(159, 159, 159, 0.1);
	}

	.l-radio input {
		vertical-align: middle;
		width: 20px;
		height: 20px;
		border-radius: 10px;
		background: none;
		border: 0;
		box-shadow: inset 0 0 0 1px #9F9F9F;
		box-shadow: inset 0 0 0 1.5px #9F9F9F;
		appearance: none;
		padding: 0;
		margin: 0;
		transition: box-shadow 150ms cubic-bezier(0.95, 0.15, 0.5, 1.25);
		pointer-events: none;
	}

	.l-radio input:focus {
		outline: none;
	}

	.l-radio input:checked {
		box-shadow: inset 0 0 0 6px darkgreen;
	}

	.l-radio span {
		vertical-align: middle;
		display: inline-block;
		line-height: 20px;
		padding: 0 8px;
	}

	.accordion {
		margin: auto;
		width: 400px;
	}

	.accordion input {
		display: none;
	}

	.box {
		position: relative;
		background: white;
		height: 64px;
		transition: all .15s ease-in-out;
	}

	.box::before {
		content: '';
		position: absolute;
		display: block;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		pointer-events: none;
		box-shadow: 0 -1px 0 #e5e5e5, 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
	}

	header.box {
		background: #00BCD4;
		z-index: 100;
		cursor: initial;
		box-shadow: 0 -1px 0 #e5e5e5, 0 0 2px -2px rgba(0, 0, 0, .12), 0 2px 4px -4px rgba(0, 0, 0, .24);
	}

	header .box-title {
		margin: 0;
		font-weight: normal;
		font-size: 16pt;
		color: white;
		cursor: initial;
	}

	.box-title {
		width: calc(100% - 40px);
		height: 64px;
		line-height: 64px;
		padding: 0 20px;
		display: inline-block;
		cursor: pointer;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	.box-content {
		width: calc(100% - 40px);
		padding: 30px 20px;
		font-size: 11pt;
		color: rgba(0, 0, 0, .54);
		display: none;
	}

	.box-close {
		position: absolute;
		height: 64px;
		width: 100%;
		top: 0;
		left: 0;
		cursor: pointer;
		display: none;
	}

	input:checked+.box {
		height: auto;
		margin: 16px 0;
		box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
	}

	input:checked+.box .box-title {
		border-bottom: 1px solid rgba(0, 0, 0, .18);
	}

	input:checked+.box .box-content,
	input:checked+.box .box-close {
		display: inline-block;
	}

	.arrows section .box-title {
		padding-left: 44px;
		width: calc(100% - 64px);
	}

	.arrows section .box-title:before {
		position: absolute;
		display: block;
		content: '\203a';
		font-size: 18pt;
		left: 20px;
		top: -2px;
		transition: transform .15s ease-in-out;
		color: rgba(0, 0, 0, .54);
	}

	input:checked+section.box .box-title:before {
		transform: rotate(90deg);
	}

	.anasayfa-input {
		border: 1px solid black;
		border-radius: 10px;
		width: 100%;
		padding: 10px;

	}

	.anasayfa-form {
		border: 1px solid white;
		border-radius: 20px;
		width: 100%;
		padding: 10px;

	}

	.btn-sefer-ara {
		padding: 10px;
		background-color: darkslategrey !important;
		border-radius: 10px;
	}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
	integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="../assets/css/demo.css" />

<body>
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
	<!-- end search area -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">

				<div class="row">

					<div class="col-md-12 col-lg-12 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell" style="width: 100%!important">
								<form method="post" action="tickets">
									<div class="bg-white p-3 rounded anasayfa-form">
										<div class="row w-100" style="margin-bottom: 25px!important;">
											<div class="col-12">
												<div class="form-check">
													<label for="flexRadioDefault1" class="l-radio">
														<input type="radio" id="flexRadioDefault1" name="seferTuru"
															tabindex="1" value="1">
														<span>Tek Yön</span>
													</label>
													<label for="flexRadio2" class="l-radio">
														<input type="radio" id="flexRadio2" name="seferTuru"
															tabindex="2" value="2" checked>
														<span>Gidiş Dönüş</span>
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3 col-sm-12">
												<div class="form-group">
													<h6 for="from" style="font-size: 15px!important">Kalkış:</h6>
													<select class="fromCityId form-select anasayfa-input"
														id="fromCityId" name="fromCityId" required>
														<?php if (isset ($data['cities'])) {
															foreach ($data['cities'] as $city): ?>
																<option value="<?php echo $city['id']; ?>"
																	style="text-color:black;" <?php echo isset ($data['fromCityId']) && $data['fromCityId'] == $city['id'] ? 'selected' : ''; ?>>
																	<?php echo $city['name']; ?>
																</option>
															<?php endforeach;
														} ?>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-12">
												<div class="form-group">
													<h6 for="from" style="font-size: 15px!important">Varış:</h6>
													<select class="toCityId form-select  anasayfa-input" id="toCityId"
														name="toCityId" required>
														<?php foreach ($data['cities'] as $city): ?>
															<option value="<?php echo $city['id']; ?>" <?php echo isset ($data['toCityId']) && $data['toCityId'] == $city['id'] ? 'selected' : ''; ?>>
																<?php echo $city['name']; ?>
															</option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-12">
												<div class="form-group">
													<h6 for="from" style="font-size: 15px!important">Gidiş Tarihi:</h6>
													
														<input class="form-control" type="date"
															value="<?php echo isset ($data['gTarih']) ? $data['gTarih'] : date('Y-m-d'); ?>"
															id="gTarih" name="gTarih"
															min="<?php echo date('Y-m-d'); ?>" />
													
												</div>

											</div>
											<div class="col-md-3 col-sm-12">
												
												<div class="form-group">
													<h6 for="from" style="font-size: 15px!important">Dönüş Tarihi:</h6>
													<input class="form-control" type="date"
															value="<?php echo isset ($data['dTarih']) ? $data['dTarih'] : date('Y-m-d'); ?>"
															id="dTarih" name="dTarih"
															min="<?php echo isset ($data['gTarih']) ? $data['gTarih'] : date('Y-m-d'); ?>" />

												</div>
											</div>

										</div>
										<div class="row p-2">
											<input type="hidden" name="operation" value="homeSearch">
											<button type="submit" class="btn btn-dark p-2 mx-auto btn-sefer-ara"
												style="width: 25%!important;">Sefer Ara
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Seçkin Firmalar</h3>
							<p>Firmaların otobüs biletlerini karşılaştırabilir, uygun otobüs biletini bulabilir ve
								çevrimiçi
								bir şekilde satın alabilirsiniz.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>7/24 Müşteri Hizmetleri</h3>
							<p>Yapacağınız tüm işlemlerde müşteri hizmetleri ekibimiz 7/24 yanınızda. Bir tıkla destek
								ekibimize bağlanabilirsiniz.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Güvenli Ödeme</h3>
							<p>Tüm otobüs bilet alım işlemlerinizi cep telefonunuzdan kolay, hızlı ve güvenilir bir
								şekilde
								gerçekleştirebilirsiniz.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- Popüler Şehirler -->
	<div class="container">
		<h4 class="mt-3 p-3">Yurt İçi Popüler Şehirler</h4>
		<hr>
		<div class="row p-3">
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100"
					src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2b/28/4a/61/caption.jpg?w=1200&h=-1&s=1"
					alt="İstanbul">
				<h6 class="text-center mt-1">İstanbul</h6>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100"
					src="https://cdnp.flypgs.com/files/Sehirler-long-tail/Ankara/Ankara_Sehir_Rehberi.jpg" alt="Ankara">
				<h6 class="text-center mt-1">Ankara</h6>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100"
					src="https://static.daktilo.com/sites/535/uploads/2023/06/21/kocaeli-buyuksehir-belediyesi-havadan-kocaeli-226-1687351543.jpg"
					alt="Kocaeli">
				<h6 class="text-center mt-1">Kocaeli</h6>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100" src="https://bayrampasa.bel.tr/isDosyalar/2022/11/07/galeri_is_6207.jpg"
					alt="Bursa">
				<h6 class="text-center mt-1">Bursa</h6>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100" src="https://d3rh8btizouuof.cloudfront.net/images/sehir/yalova.jpg"
					alt="Yalova">
				<h6 class="text-center mt-1">Yalova</h6>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100" src="https://www.edirne.bel.tr/images/Edirne/meri%C3%A7.jpg" alt="Edirne">
				<h6 class="text-center mt-1">Edirne</h6>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100" src="https://im.haberturk.com/l/2021/06/22/ver1624366835/3111877/jpg/640x360"
					alt="Sakarya">
				<h6 class="text-center mt-1">Sakarya</h6>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
				<img class="h-100 w-100"
					src="https://kentarsivi.balikesir.bel.tr/uploads/img/image-1687441170005-513621203.jpg"
					alt="Balıkesir">
				<h6 class="text-center mt-1">Balıkesir</h6>
			</div>
		</div>
	</div>
	<!-- Popüler Şehirler -->

	<!-- Sıkça Sorulan Sorular -->
	<nav class="accordion arrows mt-5 mb-5 w-100 p-3 container">
		<header class="box" style="background-color: green!important">
			<label for="acc-close" class="box-title">Sıkça Sorulan Sorular</label>
		</header>
		<input type="radio" name="accordion" id="cb1" />
		<section class="box">
			<label class="box-title" for="cb1">Umuttepe Turizm'den biletimi nasıl satın alabilirim?</label>
			<label class="box-close" for="acc-close"></label>
			<div class="box-content">Umuttepe Turizm'den otobüs bileti satın almak için web sitemizi kullanabilirsiniz.
				Seyahat etmek istediğiniz yeri ve tarihi girdikten sonra tüm seferleri karşılaştırabilir, size uygun
				sefer
				için yolcu ve kart bilgilerinizi girerek biletinizi satın alabilirsiniz.
			</div>
		</section>
		<input type="radio" name="accordion" id="cb2" />
		<section class="box">
			<label class="box-title" for="cb2">Umuttepe Turizm güvenilir mi?</label>
			<label class="box-close" for="acc-close"></label>
			<div class="box-content">Sitemiz üzerinden biletinizi güvenle satın alabilirsiniz. Sitemizden yapacağınız
				alışverişler SSL sertifikası ile güvence altına alınır. Ayrıca otobüs bileti satın alırken ödeme
				adımında 3D
				Security güvencesi sunulur.
			</div>
		</section>
		<input type="radio" name="accordion" id="cb3" />
		<section class="box">
			<label class="box-title" for="cb3">Otobüs bileti satın alırken komisyon ödenir mi?</label>
			<label class="box-close" for="acc-close"></label>
			<div class="box-content">Umuttepe Turizm komisyon ücreti almaz. Umuttepe Turizm'i kullanarak otobüs bileti
				alırken sadece biletinizin fiyatını ödersiniz.
			</div>
		</section>

		<input type="radio" name="accordion" id="acc-close" />
	</nav>
	<!-- Sıkça Sorulan Sorular -->



	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Kalkış ve Varış şehirlerini seçmek için select elementlerini al
			var fromCitySelect = document.getElementById('fromCityId');
			var toCitySelect = document.getElementById('toCityId');

			// Sayfa yüklendiğinde ilk seçeneği varsayılan olarak ayarla
			var defaultFromCity = fromCitySelect.options[0].value;
			var defaultToCity = toCitySelect.options[1].value;
			toCitySelect.value = defaultToCity;

			// Kalkış şehri değiştiğinde
			fromCitySelect.addEventListener('change', function () {
				// Eğer Varış şehri seçilen Kalkış şehriyle aynıysa
				if (toCitySelect.value === fromCitySelect.value) {
					// Varış şehri seçilen Kalkış şehriyle aynı yap
					toCitySelect.value = defaultFromCity;
					defaultToCity = toCitySelect.value;
				}
			});

			// Varış şehri değiştiğinde
			toCitySelect.addEventListener('change', function () {
				// Eğer Kalkış şehri seçilen Varış şehriyle aynıysa
				if (fromCitySelect.value === toCitySelect.value) {
					// Kalkış şehri seçilen Varış şehriyle aynı yap
					fromCitySelect.value = defaultToCity;
					defaultFromCity = fromCitySelect.value;
				}
			});



			var gTarihInput = document.getElementById('gTarih');
			var dTarihInput = document.getElementById('dTarih');

			// Gidiş tarihi değiştiğinde
			gTarihInput.addEventListener('change', function () {
				// Gidiş tarihi ve dönüş tarihi değerlerini al
				var gTarihValue = new Date(gTarihInput.value);
				var dTarihValue = new Date(dTarihInput.value);

				// Gidiş tarihiyle dönüş tarihi karşılaştırması
				if (dTarihValue < gTarihValue) {
					// Eğer dönüş tarihi gidiş tarihinden önceyse, dönüş tarihini gidiş tarihine eşitle
					dTarihInput.value = gTarihInput.value;
				}
			});

			// Dönüş tarihi değiştiğinde
			dTarihInput.addEventListener('change', function () {
				// Gidiş tarihi ve dönüş tarihi değerlerini al
				var gTarihValue = new Date(gTarihInput.value);
				var dTarihValue = new Date(dTarihInput.value);

				// Gidiş tarihiyle dönüş tarihi karşılaştırması
				if (dTarihValue < gTarihValue) {
					// Eğer dönüş tarihi gidiş tarihinden önceyse, dönüş tarihini gidiş tarihine eşitle
					dTarihInput.value = gTarihInput.value;
				}
			});
		});
	</script>



</body>

</html>