// sehirEkle.js dosyası
document.addEventListener('DOMContentLoaded', function() {
    var tarifeduzenleiptalbtn = document.querySelector('.tarifeduzenleiptalbtn');
    var tarifeguncellebtn = document.querySelector('.tarifeduzenlebtn');
    var duzenlebtn = document.getElementById('duzenlebtn');

    var sehirEkleBtn = document.querySelector('.tarifeeklebtn');
    var olusturbtn = document.querySelector('.tarifeekleolusturbtn');
    var iptalbtn = document.querySelector('.tarifeekleiptalbtn');

    var tarifeadiduzenle = document.getElementById('tarifeadiduzenle');
    var tarifeyuzdesiduzenle = document.getElementById('tarifeyuzdesiduzenle');
    var indirimadi = document.getElementById('indirimadi');
    var indirimyuzdesi = document.getElementById('indirimyuzdesi');
    
    sehirEkleBtn.addEventListener('click', function() {
        console.log("girdi");

        var sehirEkleDiv = document.querySelector('#tarifeeklediv');
        sehirEkleDiv.style.display="block"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });
    olusturbtn.addEventListener('click', function() {
        console.log("girdi");

        var sehirEkleDiv = document.querySelector('#tarifeeklediv');
        sehirEkleDiv.style.display="none"; 
        sehirEkleDiv.classList.toggle('show-animation');
    });

    tarifeguncellebtn.addEventListener('click', function() {
        console.log("girdi");

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



    duzenlebtn.addEventListener('click', function() {
        console.log("duzenle btn  girdi");
        tarifeadiduzenle.value = indirimadi.innerText.trim();
        tarifeyuzdesiduzenle.value = indirimyuzdesi.innerText.trim();
        var tarifeduzenlediv = document.querySelector('#tarifeduzenlediv');
        tarifeduzenlediv.style.display="block"; 
        tarifeduzenlediv.classList.toggle('show-animation');
    });
});
