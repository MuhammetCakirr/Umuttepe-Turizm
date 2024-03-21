// sehirEkle.js dosyası
document.addEventListener('DOMContentLoaded', function () {
	var rotaduzenleiptalbtn = document.querySelector('.rotaduzenleiptalbtn');
	var rotaguncellebtn = document.querySelector('.rotaduzenlebtn');

	var rotaeklebtn = document.querySelector('.rotaeklebtn');
	var rotaolusturbtn = document.querySelector('.rotaolusturbtn');
	var rotaekleiptalbtn = document.querySelector('.rotaekleiptalbtn');

	var duzenlebtns = document.querySelectorAll('.dropdown-item[id^="duzenlebtn"]');

	duzenlebtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			// Tıklanan butonun data-route-id özelliğinden rota ID'sini al
			var rotaID = btn.getAttribute('data-route-id');
			console.log(rotaID);
			// İlgili rota ID'sine sahip inputu bul
			var input = document.querySelector('input[name="rota"][id="' + rotaID + '"]');

			// Input içindeki route verisini JSON'dan ayrıştır
			var route = JSON.parse(input.value);

			kalkissaatiduzenle.value = route.departure_time.trim();
			varissaatiduzenle.value = route.arrival_time.trim();
			biletucretiduzenle.value = route.price.trim();
			otobusplakasiduzenle.value = route.bus_plate_code.trim();
			rotaduzenleid.value = route.id.trim();

			var kalkisoptions = kalkisyeriduzenle.options;
			kalkisoptions[route.from_city_id -1].selected = true;

			var varisoptions = varisyeriduzenle.options;
			varisoptions[route.to_city_id -1].selected = true;

			var tarifeduzenlediv = document.querySelector('#rotaduzenlediv');
			tarifeduzenlediv.style.display = "block";
			tarifeduzenlediv.classList.toggle('show-animation');
		});
	});
	rotaguncellebtn.addEventListener('click', function () {
		console.log("girdi");

		var rotaduzenleid = document.getElementById('rotaduzenleid').value;
		var kalkisyeriduzenle = document.getElementById('kalkisyeriduzenle').value;
		var varisyeriduzenle = document.getElementById('varisyeriduzenle').value;
		var kalkissaatiduzenle = document.getElementById('kalkissaatiduzenle').value;
		var varissaatiduzenle = document.getElementById('varissaatiduzenle').value;
		var biletucretiduzenle = document.getElementById('biletucretiduzenle').value;
		var otobusplakasiduzenle = document.getElementById('otobusplakasiduzenle').value;

		// Toplanan verileri bir nesne içinde saklama
		var routeData = {
			id: rotaduzenleid,
			kalkisyeriid: kalkisyeriduzenle,
			varisyeriid: varisyeriduzenle,
			kalkissaati: kalkissaatiduzenle,
			varissaati: varissaatiduzenle,
			biletucreti: biletucretiduzenle,
			otobusplakasi: otobusplakasiduzenle
		};

		// Şimdi bu verileri kullanabilir veya bir AJAX isteği ile sunucuya gönderebiliriz
		console.log(routeData);
		$.ajax({
			url: 'AdminController/rotaGuncelle ', // AJAX isteğinin gönderileceği URL
			type: 'POST',
			data: routeData,
			success: function(response) {
				console.log(response);
				window.location.href = 'rotalar'; // Yeniden yönlendirilecek URL'yi ayarlayın
			},
			error: function(xhr, status, error) {
				console.error(error);
			}
		});

		var sehirEkleDiv = document.querySelector('#rotaduzenlediv');
		sehirEkleDiv.style.display = "none";
		sehirEkleDiv.classList.toggle('show-animation');
	});
	rotaduzenleiptalbtn.addEventListener('click', function () {

		var sehirEkleDiv = document.querySelector('#rotaduzenlediv');
		sehirEkleDiv.style.display = "none";

		sehirEkleDiv.classList.toggle('show-animation');
	});
	rotaeklebtn.addEventListener('click', function () {
		console.log("tıklama yeri")

		var sehirEkleDiv = document.querySelector('#rotaeklediv');
		sehirEkleDiv.style.display = "block";

		sehirEkleDiv.classList.toggle('show-animation');
	});
	rotaekleiptalbtn.addEventListener('click', function () {


		var sehirEkleDiv = document.querySelector('#rotaeklediv');
		sehirEkleDiv.style.display = "none";

		sehirEkleDiv.classList.toggle('show-animation');
	});

	rotaolusturbtn.addEventListener('click', function () {
		var kalkisyeriekle = document.getElementById('kalkisyeriekle').value;
		var varisyeriekle = document.getElementById('varisyeriekle').value;
		var kalkissaatiekle = document.getElementById('kalkissaatiekle').value;
		var varissaatiekle = document.getElementById('varissaatiekle').value;
		var biletucretiekle = document.getElementById('biletucretiekle').value;
		var otobusplakasiekle = document.getElementById('otobusplakasiekle').value;

		var routeData = {
			kalkisyeriid: kalkisyeriekle,
			varisyeriid: varisyeriekle,
			kalkissaati: kalkissaatiekle,
			varissaati: varissaatiekle,
			biletucreti: biletucretiekle,
			otobusplakasi: otobusplakasiekle
		};

		// Şimdi bu verileri kullanabilir veya bir AJAX isteği ile sunucuya gönderebiliriz
		console.log(routeData);
		$.ajax({
			url: 'AdminController/rotaEkle', // AJAX isteğinin gönderileceği URL
			type: 'POST',
			data: routeData,
			success: function(response) {
				console.log(response);
				window.location.href = 'rotalar'; // Yeniden yönlendirilecek URL'yi ayarlayın
			},
			error: function(xhr, status, error) {
				console.error(error);
			}
		});

		var sehirEkleDiv = document.querySelector('#rotaeklediv');
		sehirEkleDiv.style.display = "none";

		sehirEkleDiv.classList.toggle('show-animation');
	});
});
