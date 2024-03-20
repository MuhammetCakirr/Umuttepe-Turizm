// sehirEkle.js dosyası
document.addEventListener('DOMContentLoaded', function() {
	var silbtns = document.querySelectorAll('a#silbtn');

    var sehirEkleBtn = document.querySelector('.sehireklebtn');
    var olusturbtn = document.querySelector('.sehirekleolusturbtn');
    var iptalbtn = document.querySelector('.sehirekleiptalbtn');
    sehirEkleBtn.addEventListener('click', function() {
        console.log("girdi");

        var sehirEkleDiv = document.querySelector('#sehireklediv');
        sehirEkleDiv.style.display="block"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });
    olusturbtn.addEventListener('click', function() {
        console.log("girdi");

		var sehirAdi = document.querySelector('#sehiradi').value;
		var sehirPlakasi = document.querySelector('#sehirplaka').value;

		$.ajax({
			url: 'AdminController/sehirEkle ', // AJAX isteğinin gönderileceği URL
			type: 'POST',
			data: {name: sehirAdi, plate_code: sehirPlakasi}, // POST verileri
			success: function(response) {
				console.log(response);
				window.location.href = 'sehirler'; // Yeniden yönlendirilecek URL'yi ayarlayın
			},
			error: function(xhr, status, error) {
				console.error(error);
			}
		});

        var sehirEkleDiv = document.querySelector('#sehireklediv');
        sehirEkleDiv.style.display="none"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });
    iptalbtn.addEventListener('click', function() {
        console.log("girdi");

        var sehirEkleDiv = document.querySelector('#sehireklediv');
        sehirEkleDiv.style.display="none"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });

	silbtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			var tarifeID = btn.getAttribute('data-tarife-id');
			$.ajax({
				url: 'AdminController/sehirSil ', // AJAX isteğinin gönderileceği URL
				type: 'POST',
				data: {id: tarifeID}, // POST verileri
				success: function(response) {
					console.log(response);
					window.location.href = 'sehirler'; // Yeniden yönlendirilecek URL'yi ayarlayın
				},
				error: function(xhr, status, error) {
					console.error(error);
				}
			});
		});
	});
});
