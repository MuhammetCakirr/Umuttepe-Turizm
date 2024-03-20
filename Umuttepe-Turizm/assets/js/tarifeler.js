// sehirEkle.js dosyası
document.addEventListener('DOMContentLoaded', function() {
	var duzenlebtns = document.querySelectorAll('a#duzenlebtn');
	var silbtns = document.querySelectorAll('a#silbtn');

	var tarifeduzenleiptalbtn = document.querySelector('.tarifeduzenleiptalbtn');
    var tarifeguncellebtn = document.querySelector('.tarifeduzenlebtn');
    //var duzenlebtn = document.getElementById('duzenlebtn');

    var sehirEkleBtn = document.querySelector('.tarifeeklebtn');
    var olusturbtn = document.querySelector('.tarifeekleolusturbtn');
    var iptalbtn = document.querySelector('.tarifeekleiptalbtn');

    var tarifeadiduzenleid = document.getElementById('tarifeduzenleid');
    var tarifeadiduzenle = document.getElementById('tarifeadiduzenle');
    var tarifeyuzdesiduzenle = document.getElementById('tarifeyuzdesiduzenle');
    var indirimadi = document.getElementById('indirimadi');
    var indirimyuzdesi = document.getElementById('indirimyuzdesi');


	// Basın (Press) 10
    sehirEkleBtn.addEventListener('click', function() {
        console.log("girdi");

        var sehirEkleDiv = document.querySelector('#tarifeeklediv');
        sehirEkleDiv.style.display="block"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });
    olusturbtn.addEventListener('click', function() {
        console.log("girdi");
		var tarifeAdi = document.querySelector('#tarifeadiekle').value;
		var tarifeYuzdesi = document.querySelector('#tarifeyuzdesiekle').value;

		$.ajax({
			url: 'AdminController/tarifeEkle ', // AJAX isteğinin gönderileceği URL
			type: 'POST',
			data: {name: tarifeAdi, sale: tarifeYuzdesi}, // POST verileri
			success: function(response) {
				console.log(response);
				window.location.href = 'tarifeler'; // Yeniden yönlendirilecek URL'yi ayarlayın
			},
			error: function(xhr, status, error) {
				console.error(error);
			}
		});
        var sehirEkleDiv = document.querySelector('#tarifeeklediv');
        sehirEkleDiv.style.display="none"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });

    tarifeguncellebtn.addEventListener('click', function() {
        console.log("girdi");
		// Tarife bilgilerini al
		var tarifeID = document.querySelector('#tarifeduzenleid').value;
		var tarifeAdi = document.querySelector('#tarifeadiduzenle').value;
		var tarifeYuzdesi = document.querySelector('#tarifeyuzdesiduzenle').value;

		$.ajax({
			url: 'AdminController/tarifeGuncelle ', // AJAX isteğinin gönderileceği URL
			type: 'POST',
			data: {id: tarifeID, name: tarifeAdi, sale: tarifeYuzdesi}, // POST verileri
			success: function(response) {
				console.log(response);
				window.location.href = 'tarifeler'; // Yeniden yönlendirilecek URL'yi ayarlayın
			},
			error: function(xhr, status, error) {
				console.error(error);
			}
		});
        var sehirEkleDiv = document.querySelector('#tarifeduzenlediv');
        sehirEkleDiv.style.display="none"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });

    tarifeduzenleiptalbtn.addEventListener('click', function() {
        var sehirEkleDiv = document.querySelector('#tarifeduzenlediv');
        sehirEkleDiv.style.display="none"; 
        
        sehirEkleDiv.classList.toggle('show-animation');
    });

    iptalbtn.addEventListener('click', function() {
        var sehirEkleDiv = document.querySelector('#tarifeeklediv');
        sehirEkleDiv.style.display="none"; 
        
        sehirEkleDiv.classList.toggle('show-animation');
    });

	duzenlebtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			var tarifeID = btn.getAttribute('data-tarife-id');
			console.log('Düzenle düğmesine tıklandı, Tarife ID: ' + tarifeID);
			// İlgili tarifenin ID'sini kullanarak gerekli işlemleri yapabilirsiniz
			var tarifeAdi = btn.getAttribute('data-tarife-adi');
			var tarifeYuzdesi = btn.getAttribute('data-tarife-yuzdesi');

			tarifeadiduzenleid.value = tarifeID;
			tarifeadiduzenle.value = tarifeAdi;
			tarifeyuzdesiduzenle.value = tarifeYuzdesi;
			var tarifeduzenlediv = document.querySelector('#tarifeduzenlediv');
			tarifeduzenlediv.style.display = "block";
			tarifeduzenlediv.classList.toggle('show-animation');
			console.log('işlem bitti');
		});
	});

	silbtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			var tarifeID = btn.getAttribute('data-tarife-id');
			$.ajax({
				url: 'AdminController/tarifeSil ', // AJAX isteğinin gönderileceği URL
				type: 'POST',
				data: {id: tarifeID}, // POST verileri
				success: function(response) {
					console.log(response);
					window.location.href = 'tarifeler'; // Yeniden yönlendirilecek URL'yi ayarlayın
				},
				error: function(xhr, status, error) {
					console.error(error);
				}
			});
		});
	});

});
