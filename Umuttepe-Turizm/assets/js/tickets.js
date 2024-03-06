
document.getElementById('toggleButton').addEventListener('click', function () {
    var cardBody = document.getElementById('cardBody');
    cardBody.style.display = (cardBody.style.display === 'none' || cardBody.style.display === '') ? 'block' : 'none';
});

// Butonları bir dizi olarak al
var koltukSecBtns = document.querySelectorAll('[id^="koltuksecbtn"]');

document.addEventListener("DOMContentLoaded", function () {

    var secilikoltuklarlist = [];
    var seats = document.querySelectorAll('.bus-seat');
    var erroralert = document.getElementById('myModal');
    var onaylabtn = document.getElementById('onaylabtn');
    var secilenkoltuklarp = document.getElementById('secilen-koltuklar');
    var koltuksecinizp = document.getElementById('koltuk-seciniz-p');
    
    idgenel="";

    function updateOnaylaButton() {
        if (secilikoltuklarlist.length >= 1) {
            onaylabtn.disabled = false;
            onaylabtn.style.visibility="visible";
            secilenkoltuklarp.style.visibility="visible";
            koltuksecinizp.style.visibility="hidden";
            
            
            
        } else {
            onaylabtn.disabled = true;
            onaylabtn.style.visibility="hidden";
            secilenkoltuklarp.style.visibility="hidden";
            koltuksecinizp.style.visibility="visible";
        }
    }

    document.querySelectorAll('[id^="koltuksecbtn"]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            updateOnaylaButton();
            // Butona ait $id değerini al
            var id = btn.getAttribute('data-content');
            idgenel = id;
            // Koltuk-sec div'idini oluştur
            var koltukSecID = 'koltuk-sec-div' + id;
            // Koltuk-sec div'ini al
            var koltukSec = document.getElementById(koltukSecID);
            // Diğer tüm koltuk-sec div'lerini kapat
            document.querySelectorAll('[id^="koltuk-sec-div"]').forEach(function (otherDiv) {
                if (otherDiv.id !== koltukSecID) {
                    otherDiv.style.display = 'none';
                }
            });
            // Durumu kontrol et ve tersine çevir
            koltukSec.style.display = (koltukSec.style.display === 'none' || koltukSec.style.display === '') ? 'block' : 'none';
    
            // Seçili koltukları temizle
            document.querySelectorAll('.bus-seat.active').forEach(function (seat) {
                seat.classList.remove('active');
                secilikoltuklarlist.splice(0, secilikoltuklarlist.length);
                var selectedSeatsContainer = document.getElementById('secilikoltuklar'+id);
                selectedSeatsContainer.removeChild(selectedSeatsContainer.firstChild);
            });
            
        });
    });

    seats.forEach(function (seat, index) {
        seat.addEventListener('click', function () {
            var span = seat.querySelector('span');
            var seatNumber = span.innerText;
            span.style.color = 'black';

            if (seat.classList.contains('reserved')) {
                $('#myModalrez').modal('show');
            } else if (seat.classList.contains('sold')) {
                $('#myModaldolu').modal('show');
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
                updateSelectedSeats(idgenel);
            }
            else {
                if (secilikoltuklarlist.length >= 4) {
                    $('#myModal').modal('show');
                    //  erroralert.style.display='block';
                }
                else {
                    seat.classList.toggle('active');
                    secilikoltuklarlist.push(seatNumber);
                }
                updateSelectedSeats(idgenel);


            }
        });
    });



    function updateSelectedSeats(id) {
        var selectedSeatsContainer = document.getElementById('secilikoltuklar'+id);

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
        updateOnaylaButton();	// Gizli girişleri al
		var seatNumbersInputs = document.querySelectorAll('[name^="seat_numbers"]');
		// seat_numbers gizli girişlerine secilikoltuklarlist verilerini atayın
		seatNumbersInputs.forEach(function(seat_number) {
			seat_number.value = secilikoltuklarlist.join(',');
		});
        

    }

    // Sayfa yüklendiğinde ve koltuk güncelleme işlemlerinde çağrılarak kontrolü sağla
    document.addEventListener('DOMContentLoaded', function () {
        // Sayfa yüklendiğinde ve koltuk güncelleme işlemlerinde kontrolü sağla
        updateOnaylaButton();
    });


    
});




