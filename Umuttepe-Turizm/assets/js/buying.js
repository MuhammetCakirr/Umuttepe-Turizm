// buying.js

document.addEventListener("DOMContentLoaded", function () {
    // Tarife elemanlarını seç
    var tarifeler = document.querySelectorAll('[id^="passengerTarife"]');
    var kisisayisi=tarifeler.length;
    var indirimlifiyat = 0;
    const tarifelerInput = document.querySelector('input[name="tarifeler"]');
    const tarifelerData = JSON.parse(tarifelerInput.value);

    const tarifeAdi = tarifelerData.map(sefer => sefer.name);
    const tarifeYuzde = tarifelerData.map(sefer => sefer.sale);
    var sayac=0;
    var kisiFiyatMap = {};
    for (var i = 0; i < kisisayisi; i++) {
        var tarifeName = tarifeler[i].getAttribute('name'); // Tarife elemanının name özelliğini al
        var kisiFiyatKey = tarifeName; // Kişi fiyatının anahtarı (ör. kisifiyat_Genis_1, kisifiyat_Cocuk_2, ...)
        kisiFiyatMap[kisiFiyatKey] = 0; // Her bir kişi için başlangıçta fiyatı sıfır olarak ayarla
    }



    // Her bir tarife elemanı için onchange olayını dinle
    tarifeler.forEach(function (tarifeElement) {

        tarifeElement.addEventListener('change', function () {
            var passengerTarifeName = tarifeElement.getAttribute('name');
            var dogumTarih = document.getElementById('passengerBirthdayGidis' + passengerTarifeName).value;
            if (dogumTarih === "") {
                // Eğer doğum tarihi seçilmemişse, seçimi iptal et
                tarifeElement.selectedIndex = 0; // Seçili olanı varsayılan değere geri döndür
                // Kullanıcıya uyarı mesajı göster
                $('#myModaldtarihi').modal('show');
                return; // Fonksiyondan çık
            }
            var personPriceElement = document.getElementById('kisifiyat' + passengerTarifeName);
            originalPersonPrice = parseFloat(personPriceElement.textContent);
            if(sayac<1){
                kisifiyat=originalPersonPrice;
                sayac=sayac+1;
            }
            else{
                sayac=sayac+1;
            }

            
            var indirimOrani = 0;
            var indirimAdi = '';
            switch (parseInt(tarifeElement.value)) {
                case 1: // Tam
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[0];
                    indirimAdi = tarifeAdi[0] + " "+'İndirimi';
                    break;
                case 2: // Genç (13-26)
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[1];
                    indirimAdi = tarifeAdi[1] + " "+'İndirimi';

                    break;
                case 3: // Çocuk (7-12)
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[2];
                    indirimAdi = tarifeAdi[2] + " "+'İndirimi';
                    break;
                case 4: // Yaşlı (65+)
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[3];
                    indirimAdi = tarifeAdi[3] +" "+ 'İndirimi';
                    break;
                case 5: // Öğretmen
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[4];
                    indirimAdi = tarifeAdi[4] + " "+'İndirimi';
                    break;
                case 6: // TSK Çalışan
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[5];
                    indirimAdi = tarifeAdi[5] + " "+'İndirimi';
                    break;
                case 7: // Basın (Press)
                    indirimOrani = 0;
                    indirimOrani = tarifeYuzde[6];
                    indirimAdi = tarifeAdi[6] + " "+ 'İndirimi';
                    break;
            }


            if(dogumTarih==""){
                if(tarifeElement.value == 1 ||tarifeElement.value == 5 ||tarifeElement.value ==6 ||tarifeElement.value ==7 ){

                    var discountedPrice = (kisifiyat * indirimOrani)/100 ;
                    indirimlifiyat = kisifiyat - discountedPrice;
                    kisiFiyatMap[passengerTarifeName] = indirimlifiyat;

                    var indirimMetni = '<span style="font-size: 14px; color: green; margin-right:5px;">(' +
                    indirimAdi + ': ' + (indirimOrani) + '%)</span>';
                    personPriceElement.innerHTML =
                    '<span style="font-size: 18px; color: red; margin-right:5px;">' +
                    indirimlifiyat +
                    ' TL</span>' +
                    '<span style="text-decoration: line-through; color: grey;">' +
                    kisifiyat.toFixed(2) +
                    ' TL</span> ' +
                    indirimMetni;
                    updateTotalPrice();
                
                }
                else{
                    personPriceElement.innerHTML =
                    '<span style="font-size: 18px; color: grey; margin-right:5px;">' +
                    kisifiyat +
                    ' TL</span>' ; 
                    $('#myModaldtarihi').modal('show');

                }
                
            }
            else if (
                (tarifeElement.value == 2 && (calculateAge(dogumTarih) < 13 || calculateAge(dogumTarih) > 26)) ||
                (tarifeElement.value == 3 && (calculateAge(dogumTarih) < 7 || calculateAge(dogumTarih) > 12)) ||
                (tarifeElement.value == 4 && calculateAge(dogumTarih) < 65)
            ) {
                $('#myModal').modal('show');
            } else {
                var discountedPrice = (kisifiyat * indirimOrani)/100 ;
                indirimlifiyat = kisifiyat - discountedPrice;
                kisiFiyatMap[passengerTarifeName] = indirimlifiyat;
                
                var indirimMetni = '<span style="font-size: 14px; color: green; margin-right:5px;">(' +
                    indirimAdi + ': ' + (indirimOrani) + '%)</span>';
                personPriceElement.innerHTML =
                    '<span style="font-size: 18px; color: red; margin-right:5px;">' +
                    indirimlifiyat +
                    ' TL</span>' +
                    '<span style="text-decoration: line-through; color: grey;">' +
                    kisifiyat.toFixed(2) +
                    ' TL</span> ' +
                    indirimMetni;
                    updateTotalPrice();
            }
        });
    });

    function updateTotalPrice() {
        var totalpriceElement = document.getElementById('totalpricee');
        var totalpriceElementrez = document.getElementById('totalpricerez');
        var totalAmount = 0; // Toplam fiyatı tutacak değişken

        // Her bir kişi fiyatını döngüyle topla
        for (var key in kisiFiyatMap) {
            if (kisiFiyatMap.hasOwnProperty(key)) {
                // Eğer değer 0 ise, kisifiyat ile değiştir
                var fiyat = kisiFiyatMap[key] === 0 ? kisifiyat : kisiFiyatMap[key];
                totalAmount += fiyat; // Toplam fiyata ekle
            }
        }
        var indirimsizfiyat2=kisisayisi*kisifiyat;
        totalpriceElement.innerHTML =
            '<strong style="margin-right:5px;">' + totalAmount + ' TL</strong>' +
            '<del style="color: black;">' + indirimsizfiyat2 + ' </del>';

        totalpriceElementrez.innerHTML =
            '<strong style="margin-right:5px;">' + totalAmount + ' TL</strong>' +
            '<del style="color: black;">' + indirimsizfiyat2 + ' TL</del>';
    }


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
});

