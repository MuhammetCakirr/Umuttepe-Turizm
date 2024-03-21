// buying.js

document.addEventListener("DOMContentLoaded", function () {
    // Tarife elemanlarını seç
    var tarifeler = document.querySelectorAll('[id^="tarife"]');
    var indirimlifiyat = 0;
    var indirimsizfiyat = document.getElementById('totalprice').value;

	const tarifelerInput = document.querySelector('input[name="tarifeler"]');
	const tarifelerData = JSON.parse(tarifelerInput.value);

	const tarifeAdi = tarifelerData.map(sefer => sefer.name);
	const tarifeYuzde = tarifelerData.map(sefer => sefer.sale);

	console.log(tarifeAdi);
	console.log(tarifeYuzde);

    // Her bir tarife elemanı için onchange olayını dinle
    tarifeler.forEach(function (tarifeElement) {
        tarifeElement.addEventListener('change', function () {
            // Numarayı almak için
            var number = tarifeElement.id.replace('tarife', '');

            // Diğer alanlara erişim sağla
            var dogumTarih = document.getElementById('dogumTarih' + number).value;
            var personPriceElement = document.getElementById('kisifiyat' + number);
            var originalPersonPrice = parseFloat(personPriceElement.textContent);
            
            // Tarife indirimleri
            var indirimOrani = 0;
            var indirimAdi = '';
            switch (parseInt(tarifeElement.value)) {
                case 1: // Genç (13-26)
                    indirimOrani = 0.15;
                    indirimAdi = 'Genç Yolcu İndirimi';
                    break;
                case 2: // Çocuk (7-12)
                    indirimOrani = 0.10;
                    indirimAdi = 'Çocuk Yolcu İndirimi';
                    break;
                case 3: // Yaşlı (65+)
                    indirimOrani = 0.20;
                    indirimAdi = 'Yaşlı Yolcu İndirimi';
                    break;
                case 4: // Öğretmen
                    indirimOrani = 0.25;
                    indirimAdi = 'Öğretmen Yolcu İndirimi';
                    break;
                case 5: // TSK Çalışan
                    indirimOrani = 0.20;
                    indirimAdi = 'TSK Çalışan Yolcu İndirimi';
                    break;
                case 6: // Basın (Press)
                    indirimOrani = 0.10;
                    indirimAdi = 'Basın Yolcu İndirimi';
                    break;
            }
    
            // Kontrol işlemlerini yap
            if (
                (tarifeElement.value == 1 && (calculateAge(dogumTarih) < 13 || calculateAge(dogumTarih) > 26)) ||
                (tarifeElement.value == 2 && (calculateAge(dogumTarih) < 7 || calculateAge(dogumTarih) > 12)) ||
                (tarifeElement.value == 3 && calculateAge(dogumTarih) < 65)
            ) {
                $('#myModal').modal('show');
            } else {
                var discountedPrice = originalPersonPrice * (1 - indirimOrani);
                indirimlifiyat=indirimlifiyat+discountedPrice;
                var indirimMetni = '<span style="font-size: 14px; color: green; margin-right:5px;">(' +
                                   indirimAdi + ': ' + (indirimOrani * 100) + '%)</span>';
                personPriceElement.innerHTML =
                    '<span style="font-size: 18px; color: red; margin-right:5px;">' +
                    discountedPrice.toFixed(2) +
                    ' TL</span>' +
                    '<span style="text-decoration: line-through; color: grey;">' +
                    originalPersonPrice.toFixed(2) +
                    ' TL</span> ' +
                    indirimMetni;
                    updateTotalPrice(indirimlifiyat);    
            }
        });
    });
    

    // Genel bir kontrol fonksiyonu
    function calculateAge(birthDate) {
        var today = new Date();
        var birthDate = new Date(birthDate);
        var age = today.getFullYear() - birthDate.getFullYear();
        var month = today.getMonth() - birthDate.getMonth();
        if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }

    function updateTotalPrice(indirimlifiyat) {
        var totalpriceElement = document.getElementById('totalpricee'); 
        var totalpriceElementrez = document.getElementById('totalpricerez');
        var text=indirimsizfiyat + " TL";
        
        totalpriceElement.innerHTML = 
            '<strong style="margin-right:5px;">' + indirimlifiyat + ' TL</strong>' +
            '<del style="color: black;">' + text +' </del>';
            
            totalpriceElementrez.innerHTML = 
            '<strong style="margin-right:5px;">' + indirimlifiyat + ' TL</strong>' +
            '<del style="color: black;">' + indirimsizfiyat +' TL</del>';
    }
});

// function kontrolEt() {
//     var tarife = document.getElementById('tarife').value;
//     var dogumTarih = document.getElementById('dogumTarih').value;

//     if (
//         (tarife == 1 && (calculateAge(dogumTarih) < 13 || calculateAge(dogumTarih) > 26)) ||
//         (tarife == 2 && (calculateAge(dogumTarih) < 7 || calculateAge(dogumTarih) > 12)) ||
//         (tarife == 3 && calculateAge(dogumTarih) < 65)

//     ) {
//         $('#myModal').modal('show');
//     }
//     else {
//         var personPriceElement = document.getElementById('kisifiyat');
//         var originalPersonPrice = parseFloat(personPriceElement.textContent);
//         var discountedPrice = originalPersonPrice * 0.85;
//         personPriceElement.innerHTML =
//             '<span style="font-size: 18px; color: red; margin-right:5px;">' +
//             discountedPrice.toFixed(2) +
//             ' TL</span>' +
//             '<span style="text-decoration: line-through; color: grey;">' +
//             originalPersonPrice.toFixed(2) +
//             ' TL</span> ';

//     }
// }

// function calculateAge(birthDate) {
//     var today = new Date();
//     var birthDate = new Date(birthDate);
//     var age = today.getFullYear() - birthDate.getFullYear();
//     var month = today.getMonth() - birthDate.getMonth();
//     if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     return age;
// }
