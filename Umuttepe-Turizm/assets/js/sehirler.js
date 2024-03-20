// sehirEkle.js dosyası
document.addEventListener('DOMContentLoaded', function() {
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
});
