<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<title>Document</title>
	<style>
		.form-control {
			padding: 15px;
		}

		.kutular {
			border: 1px solid teal;
			border-radius: 10px;
			padding: 15px;
			margin-bottom: 10px;
		}

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

		.month {
			width: 50%;
			border: 1px solid grey;
			border-radius: 10px;
			padding: 6px;
			margin-right: 5px;
		}

		strong {
			font-size: 18px;
		}

		.sefer-p {
			margin-left: 5px;
			font-size: 18px;
		}

		.sefer-footer {
			background-color: #000000;
			height: 30%;
		}

		.sefer-kutu {
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}

		.sefer-suresi {
			background-color: gray;
			border: 1px solid teal;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}

		.custom-button {
			margin-top: 5px;
			width: 50%;
			padding: 20px;
			background-color: #4CAF50; /* Yeşil renk */
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.custom-button i {
			margin-right: 10px;
		}

		.custom-button span {
			flex-grow: 1;
			text-align: center;
		}

		.custom-button .right-arrow-icon {
			margin-left: 10px;
		}
	</style>
</head>

<body>
<div class="container" style="margin-top: 130px;">
	<div class="row">
		<div class="col-lg-8">
			<form method="post" action="buying" >
				<!-- İLETİŞİM BİLGİLERİ KUTUSU -->
				<div class="kutular">
					<div style="display:flex; flex-direction:row">
						<i class="fa-solid fa-address-card"
						   style="color: #071327; font-size: 15px; margin-top:5px; margin-right:5px;"></i>
						<h6 style="margin-top:3px;">İletişim Bilgileri</h6>
					</div>

					<div class="row">
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">E-Posta Adresi</label>
							<input class="form-control" type="text" id="account-fn" name="contactFullName" required>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">Telefon Numaranız</label>
							<input class="form-control" type="text" id="account-fn" name="contactTel"
								   placeholder="(5xx) xxx xx xx " required>
						</div>

					</div>
					<p>Online bilet bilgileriniz e-posta ve SMS yoluyla iletilecek.</p>
					<hr>
					<div style="display:flex; flex-direction:row">
						<input type="checkbox" style="margin-right: 4px;">
						<p>Seyahat bilgilendirmeleri, fırsat ve kampanyalardan <b>Rıza Metni</b> kapsamında haberdar
							olmak istiyorum.</p>
					</div>
				</div>
				<!-- İLETİŞİM BİLGİLERİ KUTUSU END -->

				<!-- GİDİŞ YOLCU BİLGİLERİ KUTUSU -->
				<?php
				foreach ($data['seatNumbers'] as $number) {
					?>
					<div class="kutular">
						<div style="display:flex; flex-direction:row">

							<i class="fa-solid fa-user"
							   style="color: #071327; font-size: 15px; margin-top:5px; margin-right:5px;"></i>
							<h6 style="margin-top:3px;">Yolcu Bilgileri</h6>
						</div>
						<p style="margin-top: 5px; color:blue;"><?= $number ?>. Koltuk yolcu bilgisi</p>
						<div class="row">
							<input type="hidden" name="passengerName<?= $number?>">
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="account-fn">Ad</label>
								<input class="form-control" type="text" id="account-fn" name="passengerName<?= $number?>" required>
							</div>
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="account-fn">Soyad</label>
								<input class="form-control" type="text" id="account-fn" name="passengerSurname<?= $number?>"
									   placeholder="(5xx) xxx xx xx " required>
							</div>
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="account-fn">T.C. Kimlik No</label>
								<input class="form-control" type="text" id="account-fn" name="passengerTc<?= $number?>" required>
							</div>
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="cinsiyet">Cinsiyet</label>
								<div id="cinsiyet">
									<label for="f-option<?= $number?>" class="l-radio">
										<input type="radio" id="f-option<?= $number?>" name="passengeSelector<?= $number?>" value="0" tabindex="1">
										<span>Kadın</span>
									</label>
									<label for="s-option<?= $number?>" class="l-radio">
										<input type="radio" id="s-option<?= $number?>" name="passengeSelector<?= $number?>" value="1" tabindex="2">
										<span>Erkek</span>
									</label>
								</div>
							</div>
						</div>
						<p>Servis rezervasyonu için biletinizi aldıktan sonra otobüs firması ile görüşebilirsiniz.</p>
						<hr>
					</div>
				<?php } ?>
				<!-- GİDİŞ YOLCU BİLGİLERİ KUTUSU END -->

				<!-- ÖDEME BİLGİLERİ KUTUSU -->
				<div class="kutular">
					<div class="row">
						<div class="col-lg-6 col-sm-12 ">
							<div style="display:flex; flex-direction:row;">
								<i class="fa-solid fa-credit-card"
								   style="color: #071327; font-size: 15px; margin-top:5px; margin-right:5px;"></i>
								<h6 style="margin-top:3px; margin-right: 10px;">Ödeme Bilgileri</h6>

							</div>

						</div>
						<div class="col-lg-6 col-sm-12" style="justify-content: space-around;">
							<img src="https://s3.eu-central-1.amazonaws.com/static.obilet.com/images/web/cards-782.png"
								 alt="kartlar" style="width: 100%; height:100%;">
						</div>
					</div>


					<p style="margin-top: 5px; color:black;">Lütfen Kart bilgilerinizi giriniz.</p>
					<div class="row">
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">Kart Numarası</label>
							<input class="form-control" type="text" id="account-fn" name="cartNo"
								   placeholder="XXXX XXXX XXXX XXXX" required>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">Ad - Soyad</label>
							<input class="form-control" type="text" id="account-fn" name="cartFullName" required>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="aylar">Son Kullanma Tarihi</label>
							<div style="display: flex; flex-direction:row">
								<select id="aylar" name="aylar" class="month">
									<option value="Ay Seçiniz" selected>Ay Seçiniz</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
								<select id="yıllar" name="yıllar" class="month">
									<option value="Yıl Seçiniz"  selected>Yıl Seçiniz</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
									<option value="2031">2031</option>
									<option value="2032">2032</option>
									<option value="2033">2033</option>
									<option value="2034">2034</option>
									<option value="2035">2035</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">CVC</label>
							<input class="form-control" type="text" id="account-fn" name="cartCvc" placeholder="XXX"
								   required>
						</div>
					</div>
					<hr>
					<div style="display:flex; flex-direction:row">
						<input type="checkbox" style="margin-right: 4px;">
						<p>Kart Bilgilerimi Kaydet.</p>
					</div>
					<div style="display:flex; ">
						<input type="checkbox" style="margin-right: 4px; ">
						<p><b> Ön Bilgilendirme Formu'nu , Mesafeli Satış Sözleşmesi'ni </b> okudum ve onaylıyorum.
							Kişisel verilerin işlenmesine ilişkin <b> Aydınlatma Metni’ni ve Çerez Politikası Metni'ni
							</b> okudum. <b> Kullanım Koşulları’nı </b> kabul ediyorum.</p>
					</div>
					<div style="display:flex; flex-direction:row">
						<i class="fa-solid fa-shield-halved" style="color: darkgreen; font-size:25px; "></i>
						<p style="font-size: 15px; color:grey; margin-left:5px;">Umuttepe Turizm üzerinden yapılan
							işlemler güvenlik sertifikalarıyla korunmaktadır.</p>
					</div>
					<input type="hidden" name="id" value="<?= $data['id'] ?>">
					<input type="hidden" name="seatNumbers" value="<?= $data['seat_numbers'] ?>">
					<input type="hidden" name="totalPrice" value="<?= $data['totalPrice'] ?>">
					<input type="hidden" name="operation" value="paying">
					<button class="custom-button" type="submit">
						<i class="fas fa-shield-alt"></i> <!-- Güvenlik iconu -->
						<div style="display: flex; flex-direction:column">
							<span> <strong><?= $data['totalPrice'] ?> TL</strong> </span>
							<p>Güvenli ödeme yap </p>
						</div>

						<i class="fas fa-chevron-right right-arrow-icon"></i> <!-- Sağa doğru ok iconu -->
					</button>
				</div>
				<!-- ÖDEME BİLGİLERİ KUTUSU END -->
			</form>

		</div>

		<div class="col-lg-4">
			<!-- SEFER BİLGİLERİ KUTUSU  -->
			<div class="kutular" style="padding: 0px; important!">
				<div class="row" style="padding: 10px;">
					<div class="col-lg-8 col-sm-12 ">
						<div style="display:flex; flex-direction:row;">
							<i class="fa-solid fa-bus"
							   style="color: #071327; font-size: 20px; margin-top:5px; margin-right:5px;"></i>
							<h4 style="margin-top:3px;">Sefer Bilgileri</h4>

						</div>

					</div>
					<div class="col-lg-4 col-sm-12">
						<img src="https://cdn2.enuygun.com/img/company_logos_bus/suha-turizm.png" alt="kartlar"
							 style="width: 100%; height:100%;">
					</div>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Kalkış : </Strong> </label>
					<p id="kalkis" class="sefer-p"
					   style="margin-left: 6px;"><?= $data['busRoute']['from_city_name'] ?></p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Varış : </Strong> </label>
					<p id="kalkis" class="sefer-p"
					   style="margin-left: 6px;"><?= $data['busRoute']['to_city_name'] ?></p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Firma : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">Umuttepe Turizm</p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Tarih : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?php
						 function tarihFormat($gTarih) {
							 $datetime = new DateTime($gTarih);
							 $aylar = array(
								 '01' => 'Ocak',
								 '02' => 'Şubat',
								 '03' => 'Mart',
								 '04' => 'Nisan',
								 '05' => 'Mayıs',
								 '06' => 'Haziran',
								 '07' => 'Temmuz',
								 '08' => 'Ağustos',
								 '09' => 'Eylül',
								 '10' => 'Ekim',
								 '11' => 'Kasım',
								 '12' => 'Aralık'
							 );
							 $gunler = array(
								 'Pazartesi',
								 'Salı',
								 'Çarşamba',
								 'Perşembe',
								 'Cuma',
								 'Cumartesi',
								 'Pazar'
							 );

							 $tarih = $datetime->format('d') . ' ' . $aylar[$datetime->format('m')] . ' ' . $datetime->format('Y');
							 $gun = $gunler[date('N', strtotime($gTarih)) - 1];

							 echo $tarih . ', ' . $gun;
						}
						echo tarihFormat($data['busRoute']['departure_time']);
						?>
					</p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Saat : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?php
						$departure_time = strtotime($data['busRoute']['departure_time']);
						$formatted_time = date('H:i', $departure_time); // Saat ve dakika formatını alır
						echo $formatted_time; // Biçimlendirilmiş saat bilgisini yazdırır
						?>
					</p>
				</div>

				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Koltuk : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?php
						echo implode(',', $data['seatNumbers']);
						?>
					</p>
				</div>
				<div style="display:flex; flex-direction:row;">
					<i class="fa-regular fa-clock" style="color: #000000; font-size:20px; margin:7px;"></i>
					<p><strong>Tahmini Sefer Süresi : </strong>
					<p class="sefer-p" style="margin-left: 6px;"><?php
						$departure_time = strtotime($data['busRoute']['departure_time']);
						$arrival_time = strtotime($data['busRoute']['arrival_time']);

						$time_diff_seconds = $arrival_time - $departure_time;

						// Saat ve dakika cinsine dönüştürün
						$time_diff_hours = floor($time_diff_seconds / 3600);
						$time_diff_minutes = floor(($time_diff_seconds % 3600) / 60);
						echo $time_diff_hours . " saat " . ($time_diff_minutes == 0 ? "" :  $time_diff_minutes . " dakika") ;
						?></p></p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>İptal Koşulları </Strong> </label>
					<i class="fa-solid fa-circle-exclamation"
					   style="color: #000000; font-size: 20px; margin:7px;"></i>
				</div>
				<div style="padding-left: 10px; padding-right: 10px;">
					<p>Biletinizi yolculuğunuzdan 6 saat öncesine kadar ücretsiz iptal edebilirsiniz.</p>
				</div>


			</div>
			<!-- SEFER BİLGİLERİ KUTUSU END  -->
		</div>
	</div>
</div>
</body>

</html>
