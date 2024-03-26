<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
	integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
	#qrkod {
		width: 100%;
		height: 100%;
	}

	@media only screen and (max-width: 768px) {
		#qrkod {
			text-align: center;
			width: 75%;
			height: 75%;
		}
	}

	.biletlerimnavbar {
		width: 100%;
	}

	.biletlerim-content {
		text-align: center;
		background-color: transparent;
	}

	.large-icon {
		font-size: 4em;
		/* İstediğiniz büyüklükteki font size */
	}

	.biletlerim-container {
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		width: 100%;
		height: 35%;
		background-color: white;
		border: 1px solid white;
		border-radius: 10px;
		padding-left: 10px;
		padding-right: 10px;

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
		text-align: center;
		color: whitesmoke;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	}

	.bilet-bilgi {

		margin-bottom: 1px;
		display: flex;
		flex-direction: column;
	}

	.yolcu-bilgileri {
		transition: all 0.5s ease;
		overflow: hidden;
	}

	#yolcu-bilgi-baslik {
		text-align: left;
	}

	#bilet-iptal-btn {
		margin-bottom: 10px;
		border: 1px solid darkolivegreen;
		border-radius: 10px;
		justify-content: center;
		padding: 10px;
		background-color: brown;
		text-align: center;
	}

	#bilet-iptal-btn:hover {
		margin-bottom: 10px;
		border: 1px solid black;
		border-radius: 10px;
		justify-content: center;
		padding: 10px;
		background-color: red;
		text-align: center;
	}

	#bilet-odeme-btn {
		margin-bottom: 10px;
		border: 1px solid darkolivegreen;
		border-radius: 10px;
		justify-content: center;
		padding: 10px;
		background-color: darkgreen;
		text-align: center;
	}

	#bilet-odeme-btn:hover {
		background-color: green;
	}

	.navbtndiv {
		border-right: 1px solid darkgreen;
	}

	#btnaktifbiletlerim {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		padding: 10px;
		height: 100%;

	}

	#btnaktifbiletlerim:hover {
		background-color: gray;
		color: white;
	}

	#btniptaledilenbiletlerim {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		padding: 10px;
		height: 100%;

	}

	#btniptaledilenbiletlerim:hover {
		background-color: gray;
		color: white;
	}

	#btntumbiletlerim {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		padding: 10px;
		height: 100%;


	}

	#btntumbiletlerim:hover {
		background-color: gray;
		color: white;
	}

	#rezervasyonlarim {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		padding: 10px;
		height: 100%;

	}

	#rezervasyonlarim:hover {
		background-color: gray;
		color: white;
	}

	.active {
		background-color: darkslategray;
		color: white;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function () {
		$('[id^="bilet-incele-btn"]').click(function () {
			var id = $(this).data('content');
			var yolcuBilgileri = '#yolcu-bilgileri' + id;
			var arrowIcon = $(this).find("#arrow-icon");
			var buttonText = $(this).find(".bileti-incele-p");

			$(yolcuBilgileri).slideToggle("slow");
			arrowIcon.toggleClass("fa-circle-arrow-down fa-circle-arrow-up");
			buttonText.text(function (i, text) {
				return text === "Bileti İncele" ? "Kapat" : "Bileti İncele";
			});
		});
	});

</script>



<div>
	
	<?php
	$secililist = 0;
	$rezlist = array();
	$aktiflist = array();
	$iptallist = array();
	 
	foreach ($data['biletlerim'] as $bilet) {
		if ($bilet['status'] == 2) {
			array_push($aktiflist, $bilet);
		} elseif ($bilet['status'] == 3) {
			array_push($rezlist, $bilet);
		} elseif ($bilet['status'] == 5) {
			array_push($iptallist, $bilet); 
		}
	}
	
	
?> 
<input type="text" style="display: hidden;" id="secililist" value="<?=$data['biletlerim']?>">
<input type="text" style="display: hidden;" id="rezlist" value="<?=var_dump($rezlist)?>">
<input type="text" style="display: hidden;" id="aktiflist" value="<?=var_dump($aktiflist)?>">
<input type="text" style="display: hidden;" id="iptallist" value="<?=var_dump($iptallist)?>">
	<div>
		<?php
		if (count($data['biletlerim']) == 0) { ?>
			<div class="biletlerim-content" style="background-color: e7e7e7;">
				<i class="fa-solid fa-bus-simple large-icon"></i>
				<h4 class="text-center mt-2" style="color: grey;"> Henüz hiç bilet satın almadınız.</h4>
				<h6>İşlem yaptıkça, satın aldığınız biletlere buradan ulaşabileceksiniz.<h6>
			</div>
			<?php
		} else {
			?>

			<?php
		}
		function tarihFormat($gTarih)
		{
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
			return $tarih . ', ' . $gun;
		}
		?>
		<div class="biletlerimnavbar">
		<div style="justify-content: center; width:100%; display:flex; flex-direction:row;">
        <div class="col-3 active" data-content="0" id="btntumbiletlerim" style="text-align: center;"
            onclick="seciliButonuBelirle(this)">Tüm Biletlerim</div>
        <div class="col-3 " data-content="2" id="btnaktifbiletlerim" style="text-align: center;"
            onclick="seciliButonuBelirle(this)">Aktif Biletler</div>
        <div class="col-3 " data-content="5" id="btniptaledilenbiletlerim" style="text-align: center;"
            onclick="seciliButonuBelirle(this)">İptal Edilen Biletler</div>
        <div class="col-3 " data-content="3" id="rezervasyonlarim" style="text-align: center;"
            onclick="seciliButonuBelirle(this)">Rezervasyonlarım</div>
    </div>
		</div>
		<?php
		
		foreach ($data['biletlerim'] as $bilet) {
			?>

			<div class="biletlerim-container" data-content="<?= $bilet['id'] ?>">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12" style="justify-content: center;">
						<?php
						echo '<img  id="qrkod"  class="qr" alt="arabam" src="Render/qr?text=' . $bilet['pnr'] . '"/>';
						?>
					</div>
					<div class="col-lg-7">
						<div class="row mt-3">
							<div class="col-lg-6">
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Kalkış</span>
									<span id="guzergah"><strong>
											<?= $bilet['from_city_name'] ?>
										</strong> </span>
								</div>
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Tarih</span>
									<span id="guzergah"><strong>
											<?= tarihFormat($bilet['departure_date']) ?>
										</strong> </span>
								</div>

							</div>
							<div class="col-lg-6">
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Varış</span>
									<span id="guzergah"><strong>
											<?= $bilet['to_city_name'] ?>
										</strong> </span>
								</div>
								<div class="bilet-bilgi">
									<span for="guzergah" style="color: gray;">Kalkış Saati</span>
									<span id="guzergah"><strong>
											<?= $bilet['departure_time'] ?>
										</strong> </span>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-2 mt-3">
						<div class="bilet-durum-container"
							style="background-color:<?= ($bilet['status'] == 2) ? "green" : ($bilet['status'] == 3 ? "darkblue" : ($bilet['status'] == 4 ? "grey" : "red")) ?> ;">
							<p id="bilet-durum-p">
								<?= ($bilet['status'] == 2) ? "Aktif" : ($bilet['status'] == 3 ? "Rezerve" : ($bilet['status'] == 4 ? "Açığa Alınmış" : "İptal Edilmiş")) ?>
							</p>
						</div>

					</div>
				</div>
				<hr>
				<div id="yolcu-bilgileri<?= $bilet['id'] ?>" class="yolcu-bilgileri" style="display: none;">
					<?php
					for ($i = 1; $i < count($bilet['passenger']); $i++) {
						$p = $bilet['passenger'][$i];
						?>
						<h6 id="yolcu-bilgi-baslik">
							<?= $i ?>. Yolcu Bilgileri
						</h6>
						<div class="row" style="margin: 10px;">
							<div class="col-lg-3">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">Ad-Soyad</span>
									<span id="adsoyad"><strong>
											<?= $p['name'] ?>
											<?= $p['surname'] ?>
										</strong> </span>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">Koltuk</span>
									<span id="adsoyad"><strong>
											<?= $p['seat_number'] ?>
										</strong> </span>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">Fiyat</span>
									<span id="adsoyad"><strong>
											<?php echo $data['tarife'][$p['tarife'] - 1]['sale'] != 0 ? ($data['tarife'][$p['tarife'] - 1]['sale'] * $bilet['price']) / 100 : $bilet['price']; ?>
											TL
										</strong> </span>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">TC Kimlik No</span>
									<span id="adsoyad"><strong>
											<?= $p['tc'] ?>
										</strong> </span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">Cinsiyet</span>
									<span id="adsoyad"><strong>
											<?= $p['gender'] == 1 ? "Erkek" : "Kadın" ?>
										</strong> </span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">Tarife</span>
									<span id="adsoyad"><strong>
											<?= $p['tarife_name'] ?>
										</strong> </span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="bilet-bilgi">
									<span for="adsoyad" style="color: gray;">Doğum Tarihi</span>
									<span id="adsoyad"><strong>
											<?= $p['birthday'] ?>
										</strong> </span>
								</div>
							</div>

						</div>
						<hr>
					<?php } ?>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-6 col-sm-12" style="display:flex; justify-content: flex-start;">
						<?php
						$id = $bilet['id'];
						if ($bilet['status'] == 3) {
							?>
							<div class="row" style="width: 100%;">
								<div class="col-lg-6 col-md-6 col-sm-12" onclick="biletIslem(<?php echo $id; ?>,1)">
									<div id="bilet-odeme-btn">
										<p style="color: white;">
											Ödeme Yap
										</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12" onclick="biletIslem(<?php echo $id; ?>,2)">
									<div id="bilet-iptal-btn">
										<p style="color: white;">
											Bileti İptal Et
										</p>
									</div>
								</div>

							</div>
							<?php
						} else if ($bilet['status'] == 2) { ?>
								<div class="col-lg-6 col-md-6 col-sm-12" onclick="biletIslem(<?php echo $id; ?>,3)">
									<div id="bilet-iptal-btn">
										<p style="color: white;">
											Bileti Açığa Al
										</p>
									</div>
								</div>
						<?php } ?>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content: flex-end; width: 100%;">
						<div id="bilet-incele-btn" data-content="<?= $bilet['id'] ?>"
							style="display: flex; flex-direction:row; justify-content:center;">
							<p class="bileti-incele-p">Bileti İncele</p>
							<i id="arrow-icon" class="fa-solid fa-circle-arrow-down"
								style="color: #729289;	 font-size:20px; margin:4px;"></i>
						</div>
					</div>
				</div>

			</div>
			<?php
		}
		?>

		<?php

		?>

	</div>
</div>
<script>
	function biletIslem(id, islem) {
		$.ajax({
			url: 'SettingsController/biletIslem', // AJAX isteğinin gönderileceği URL
			type: 'POST',
			data: { id: id, islem: islem }, // POST verileri
			success: function (response) {
				window.location.href = 'biletlerim'; // Yeniden yönlendirilecek URL'yi ayarlayın
			},
			error: function (xhr, status, error) {
				console.error(error);
			}
		});
	}

</script>

<script src="assets/js/biletlerim.js"></script>