// sehirEkle.js dosyası
document.addEventListener('DOMContentLoaded', function() {
    var rotaduzenleiptalbtn = document.querySelector('.rotaduzenleiptalbtn');
    var rotaguncellebtn = document.querySelector('.rotaduzenlebtn');
    var duzenlebtn = document.getElementById('duzenlebtn');

    var rotaeklebtn = document.querySelector('.rotaeklebtn');
    var rotaolusturbtn = document.querySelector('.rotaolusturbtn');
    var rotaekleiptalbtn = document.querySelector('.rotaekleiptalbtn');

    //tablodaki veriler
    var kalkisyeritablo = document.getElementById('kalkisyeritablo');
    var varisyeritablo = document.getElementById('varisyeritablo');
    var kalkissaatitablo = document.getElementById('kalkissaatitablo');
    var varisaatitablo = document.getElementById('varisaatitablo');
    var biletucretitablo = document.getElementById('biletucretitablo');
    var plakatablo = document.getElementById('plakatablo');


    //düzenle tablosundaki inputlar
    var kalkisyeriduzenle = document.getElementById('kalkisyeriduzenle');
    var varisyeriduzenle = document.getElementById('varisyeriduzenle');
    var kalkissaatiduzenle = document.getElementById('kalkissaatiduzenle');
    var varissaatiduzenle = document.getElementById('varissaatiduzenle');
    var biletucretiduzenle = document.getElementById('biletucretiduzenle');
    var otobusplakasiduzenle = document.getElementById('otobusplakasiduzenle');


    duzenlebtn.addEventListener('click', function() {
        
        // kalkisyeriduzenle.value = kalkisyeritablo.innerText.trim();
        // varisyeriduzenle.value = varisyeritablo.innerText.trim();
        kalkissaatiduzenle.value = kalkissaatitablo.innerText.trim();
        varissaatiduzenle.value = varisaatitablo.innerText.trim();
        biletucretiduzenle.value = biletucretitablo.innerText.trim();
        otobusplakasiduzenle.value = plakatablo.innerText.trim();

        var selectedKalkisYer = kalkisyeritablo.innerText.trim();;
        var kalkisoptions = kalkisyeriduzenle.options;

        var selectedvarisYer = varisyeritablo.innerText.trim(); ;
        var varisoptions = varisyeriduzenle.options;
        
        for (var i = 0; i < kalkisoptions.length; i++) {

            console.log(kalkisoptions);
            // Seçenek değeri ile kalkış yeri verisine uygun olan seçeneği seçili yap
            if (kalkisoptions[i].innerText === selectedKalkisYer) {
                console.log(kalkisoptions[i].innerText);
                kalkisoptions[i].selected = true;
                break; // Eşleşme bulunduğunda döngüden çık
            }
        }
        for (var i = 0; i < varisoptions.length; i++) {
            // Seçenek değeri ile kalkış yeri verisine uygun olan seçeneği seçili yap
            if (varisoptions[i].innerText === selectedvarisYer) {
                console.log(varisoptions[i].innerText);
                varisoptions[i].selected = true;
                break; // Eşleşme bulunduğunda döngüden çık
            }
        }
        var tarifeduzenlediv = document.querySelector('#rotaduzenlediv');
        tarifeduzenlediv.style.display="block"; 
        tarifeduzenlediv.classList.toggle('show-animation');
    });

    rotaguncellebtn.addEventListener('click', function() {
        console.log("girdi");

        var sehirEkleDiv = document.querySelector('#rotaduzenlediv');
        sehirEkleDiv.style.display="none"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });
    
    rotaduzenleiptalbtn.addEventListener('click', function() {
        

        var sehirEkleDiv = document.querySelector('#rotaduzenlediv');
        sehirEkleDiv.style.display="none"; 
        
        sehirEkleDiv.classList.toggle('show-animation');
    });

    rotaeklebtn.addEventListener('click', function() {
        

        var sehirEkleDiv = document.querySelector('#rotaeklediv');
        sehirEkleDiv.style.display="block"; 
        
        sehirEkleDiv.classList.toggle('show-animation');
    });

    rotaekleiptalbtn.addEventListener('click', function() {
        

        var sehirEkleDiv = document.querySelector('#rotaeklediv');
        sehirEkleDiv.style.display="none"; 
        
        sehirEkleDiv.classList.toggle('show-animation');
    });

    rotaolusturbtn.addEventListener('click', function() {
        

        var sehirEkleDiv = document.querySelector('#rotaeklediv');
        sehirEkleDiv.style.display="none"; 
        
        sehirEkleDiv.classList.toggle('show-animation');
    });




});
