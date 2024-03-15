<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
	integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
	.biletlerim-container {
		margin-left: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		width: 100%;
		height: 35%;
		background-color: white;
		border: 1px solid white;
		border-radius: 10px;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 5px;
		box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
	}

	.biletlerim-container>.row>.col-lg-3 {
		display: flex;
		justify-content: flex-end;
		align-items: center;
	}

	.bileti-incele-p {
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
		font-size: 16px;
	}

	.bilet-durum-container {
		padding: 5px;
		border: 2px solid darkolivegreen;
		border-radius: 15px;
		background-color: green;
	}

	#bilet-durum-p {
		color: whitesmoke;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	}

	.bilet-bilgi {
		
		margin-bottom: 4px;
		display: flex;
		flex-direction: column;
	}

	#yolcu-bilgileri {
		display: none;
		/* Dikey olarak açılma animasyonu */
		transition: height 0.5s ease;
		overflow: hidden;
	}

	#yolcu-bilgi-baslik {
		text-align: left;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function () {
		$("#bilet-incele-btn").click(function () {
			$("#yolcu-bilgileri").slideToggle("slow");
			$("#arrow-icon").toggleClass("fa-circle-arrow-down fa-circle-arrow-up");
			$(".bileti-incele-p").text(function (i, text) {
				return text === "Bileti İncele" ? "Kapat" : "Bileti İncele";
			});
		});
	});
</script>


<div class="card text-center">
	<div class="card-header">
		<ul class="nav nav-pills card-header-pills">
			<li class="nav-item">
				<a class="nav-link active" href="#">Aktif Biletlerim</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Geçmiş Biletlerim</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="#">Tüm Biletlerim</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="card-deck">

			<div class="biletlerim-container">
				<div class="row">
					<div class="col-lg-3">
						<?php
						echo '<img width="100%" height="100%" class="qr" alt="arabam" src="Render/qr?text=' . $data['biletlerim'][4]['pnr'] . '"/>';
						?>
					</div>
					<div class="col-lg-7">
						<div class="row mt-3">
							<div class="col-lg-6">
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Kalkış</span>
									<span id="guzergah"><strong>İstanbul</strong> </span>
								</div>
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Tarih</span>
									<span id="guzergah"><strong>9 Mart,Cumartesi</strong> </span>
								</div>

							</div>
							<div class="col-lg-6">
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Varış</span>
									<span id="guzergah"><strong>Antalya </strong> </span>
								</div>
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Kalkış Saati</span>
									<span id="guzergah"><strong>17:00</strong> </span>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-2 mt-3">
						<div class="bilet-durum-container">
							<p id="bilet-durum-p">Aktif</p>
						</div>

					</div>
				</div>
				<hr>

				<div id="yolcu-bilgileri">
					<h6 id="yolcu-bilgi-baslik">1. Yolcu Bilgileri</h6>
					<div class="row" style="margin: 10px;">
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Ad-Soyad</span>
							<span id="adsoyad"><strong>Muhammet İkbal Çakır</strong> </span>
						</div>
						</div>
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Koltuk</span>
							<span id="adsoyad"><strong>25</strong> </span>
						</div>
						</div>
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Fiyat</span>
							<span id="adsoyad"><strong>360 TL</strong> </span>
						</div>
						</div>
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">TC Kimlik No</span>
							<span id="adsoyad"><strong>11729511141</strong> </span>
						</div>
						</div>
						<div class="col-lg-4">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Cinsiyet</span>
							<span id="adsoyad"><strong>Erkek</strong> </span>
						</div>
						</div>
						<div class="col-lg-4">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Tarife</span>
							<span id="adsoyad"><strong>Öğrenci</strong> </span>
						</div>
						</div>
						<div class="col-lg-4">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Doğum Tarihi</span>
							<span id="adsoyad"><strong>28/10/2003</strong> </span>
						</div>
						</div>

					</div>
					<hr>
					<h6 id="yolcu-bilgi-baslik">2. Yolcu Bilgileri</h6>
					<div class="row" style="margin: 10px;">
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Ad-Soyad</span>
							<span id="adsoyad"><strong>Muhammet İkbal Çakır</strong> </span>
						</div>
						</div>
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Koltuk</span>
							<span id="adsoyad"><strong>25</strong> </span>
						</div>
						</div>
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Fiyat</span>
							<span id="adsoyad"><strong>360 TL</strong> </span>
						</div>
						</div>
						<div class="col-lg-3">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">TC Kimlik No</span>
							<span id="adsoyad"><strong>11729511141</strong> </span>
						</div>
						</div>
						<div class="col-lg-4">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Cinsiyet</span>
							<span id="adsoyad"><strong>Erkek</strong> </span>
						</div>
						</div>
						<div class="col-lg-4">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Tarife</span>
							<span id="adsoyad"><strong>Öğrenci</strong> </span>
						</div>
						</div>
						<div class="col-lg-4">
						<div class="bilet-bilgi">
							<span for="adsoyad" style="color: gray;">Doğum Tarihi</span>
							<span id="adsoyad"><strong>28/10/2003</strong> </span>
						</div>
						</div>

					</div>
					<hr>
				</div>

				<div style="display:flex; justify-content: flex-end;">
					<div id="bilet-incele-btn" style="display: flex; flex-direction:row;">
						<p class="bileti-incele-p">Bileti İncele</p>
						<i id="arrow-icon" class="fa-solid fa-circle-arrow-down"
							style="color: #729289;	 font-size:20px; margin:4px;"></i>
					</div>

				</div>

			</div>

			<!-- <div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="card" style="border-radius: 20px;">
						<div class="card-header"
							 style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; height: 8%; background-color: black; display: flex; justify-content: space-between; align-items: center;">
							<p style="color:white;">Logo</p>
							<p style="color:white;">41 ZA 432</p>
						</div>
						<div class="yanyanadiv" style="display: flex; justify-content: space-between; margin:30px;">
							<div>
								<small>KALKIŞ</small> <br/>
								<strong style="font-size:20px;">KOCAELİ</strong>
							</div>
							<i class="fa-solid fa-van-shuttle" style="color: #000000; font-size: 40px;"></i>

							<div>
								<small>VARIŞ</small><br/>
								<strong style="font-size:20px;">HATAY</strong>
							</div>
						</div>
						<hr>
						<div style="display: flex;"> 
							
							<div style="flex: 1; padding: 15px; border-right: 1px solid #ccc;">
								<small>KALKIŞ SAATİ</small>
								<br/>
								<strong style="font-size:20px;">11:45</strong>
								<br/>
								<small>VARIŞ SAATİ</small>
								<br/>
								<strong style="font-size:20px;">16:45</strong>
								<br/>
								<small>KOLTUK</small>
								<br/>
								<strong style="font-size:20px;">14A</strong>

							</div>
							
							<div style="flex: 1; padding: 15px;">
								<small>YOLCU ADI SOYADI</small>
								<br/>
								<strong style="font-size:15px;">MUHAMMET ÇAKIR</strong>
								<br/>
								<small>TC KİMLİK NO</small>
								<br/>
								<strong style="font-size:18px;">1111111111</strong>
								<br/>
								<small>TARİH</small>
								<br/>
								<strong style="font-size:18px;">28/10/2003</strong>
							</div>
						</div>
						<hr>
						<div style="display: flex; margin:5px;">
							<div style="flex: 1;">
								<i class="fa-solid fa-qrcode" style="font-size: 50px;"></i>
							</div>
							<div style="flex: 1;">
								<p>Bu QR kod, biletinizin benzersiz kimliğini temsil eder. </p>
							</div>
						</div>
						<div>

						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="card" style="border-radius: 20px;">
						<div class="card-header"
							 style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; height: 8%; background-color: black; display: flex; justify-content: space-between; align-items: center;">
							<p style="color:white;">Logo</p>
							<p style="color:white;">41 ZA 432</p>
						</div>
						<div class="yanyanadiv" style="display: flex; justify-content: space-between; margin:30px;">
							<div>
								<small>KALKIŞ</small> <br/>
								<strong style="font-size:20px;">KOCAELİ</strong>
							</div>
							<i class="fa-solid fa-van-shuttle" style="color: #000000; font-size: 40px;"></i>

							<div>
								<small>VARIŞ</small><br/>
								<strong style="font-size:20px;">HATAY</strong>
							</div>
						</div>
						<hr>
						<div style="display: flex;"> 
							
							<div style="flex: 1; padding: 15px; border-right: 1px solid #ccc;">
								<small>KALKIŞ SAATİ</small>
								<br/>
								<strong style="font-size:20px;">11:45</strong>
								<br/>
								<small>VARIŞ SAATİ</small>
								<br/>
								<strong style="font-size:20px;">16:45</strong>
								<br/>
								<small>KOLTUK</small>
								<br/>
								<strong style="font-size:20px;">14A</strong>

							</div>
							
							<div style="flex: 1; padding: 15px;">
								<small>YOLCU ADI SOYADI</small>
								<br/>
								<strong style="font-size:15px;">MUHAMMET ÇAKIR</strong>
								<br/>
								<small>TC KİMLİK NO</small>
								<br/>
								<strong style="font-size:18px;">1111111111</strong>
								<br/>
								<small>TARİH</small>
								<br/>
								<strong style="font-size:18px;">28/10/2003</strong>
							</div>
						</div>
						<hr>
						<div style="display: flex; margin:5px;">
							<div style="flex: 1;">
								<i class="fa-solid fa-qrcode" style="font-size: 50px;"></i>
							</div>
							<div style="flex: 1;">
								<p>Bu QR kod, biletinizin benzersiz kimliğini temsil eder. </p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>