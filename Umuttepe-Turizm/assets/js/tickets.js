
document.getElementById('toggleButton').addEventListener('click', function () {
    var cardBody = document.getElementById('cardBody');
    cardBody.style.display = (cardBody.style.display === 'none' || cardBody.style.display === '') ? 'block' : 'none';
});

var koltukSecBtns = document.querySelectorAll('[id^="koltuksecbtn"]');

// Her bir buton için dinleme ekleyin
document.querySelectorAll('[id^="koltuksecbtn"]').forEach(function(btn) {
	btn.addEventListener('click', function () {
		// Butona ait $id değerini al
		var id = btn.getAttribute('data-content');

		// Koltuk-sec div'idini oluştur
		var koltukSecID = 'koltuk-sec-div' + id;

		// Koltuk-sec div'ini al
		var koltukSec = document.getElementById(koltukSecID);

		// Durumu kontrol et ve tersine çevir
		koltukSec.style.display = (koltukSec.style.display === 'none' || koltukSec.style.display === '') ? 'block' : 'none';
	});
});


document.addEventListener("DOMContentLoaded", function () {

    var secilikoltuklarlist = [];
    var seats = document.querySelectorAll('.bus-seat');
    var selectedSeatsContainer = document.querySelector('.col-4 .sagkisim');

    seats.forEach(function (seat, index) {
        seat.addEventListener('click', function () {
            var span = seat.querySelector('span');
            var seatNumber = span.innerText;
            span.style.color ='black';

            if (seat.classList.contains('reserved')) {
                alert('Bu koltuk rezerve edilmiştir.');
            } else if (seat.classList.contains('sold')) {
                alert('Bu koltuk doludur.');
            } else if (seat.classList.contains('active')) {
                var index = secilikoltuklarlist.indexOf(seatNumber);
                console.log(index);
                if (index !== -1) {
                    secilikoltuklarlist.splice(index, 1);
                    seat.classList.remove("active");
                }

                secilikoltuklarlist.forEach(element => {
                    console.log(element);
                });
                updateSelectedSeats();
            }
            else {

                if (secilikoltuklarlist.length >= 4) {
                    alert('En fazla 4 tane seçebilirsiniz.');
                }
                else {
                    seat.classList.toggle('active');
                    secilikoltuklarlist.push(seatNumber);
                }



                updateSelectedSeats();


            }
        });
    });
    function updateSelectedSeats() {
        var selectedSeatsContainer = document.getElementById('secilikoltuklar');

        // Eğer secilikoltuklarlist dizisi boş değilse
        if (secilikoltuklarlist.length >= 0) {
            // Tüm çocukları silebilirsiniz
            while (selectedSeatsContainer.firstChild) {
                selectedSeatsContainer.removeChild(selectedSeatsContainer.firstChild);
            }

            // Ardından secilikoltuklarlist dizisini döngüye alabilir ve yeni elemanları ekleyebilirsiniz
            secilikoltuklarlist.forEach(element => {
                var selectedSeatDiv = document.createElement('div');
                selectedSeatDiv.classList.add('bus-row');
                var selectedSeatSpan = document.createElement('span');
                selectedSeatSpan.style.color = 'black';
                selectedSeatSpan.classList.add('bus-seat');
                selectedSeatSpan.classList.add('active');
                selectedSeatSpan.innerText = element;
                selectedSeatDiv.appendChild(selectedSeatSpan);
                selectedSeatsContainer.appendChild(selectedSeatDiv);
            });
        }
		// Gizli girişleri al
		var seatNumbersInputs = document.querySelectorAll('[name^="seat_numbers"]');
		// seat_numbers gizli girişlerine secilikoltuklarlist verilerini atayın
		seatNumbersInputs.forEach(function(seat_number) {
			seat_number.value = secilikoltuklarlist.join(',');
		});
    }
});




