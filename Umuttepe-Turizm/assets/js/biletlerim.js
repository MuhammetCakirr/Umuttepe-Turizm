document.addEventListener('DOMContentLoaded', function () {
    // Butonları seç
    var buttons = document.querySelectorAll('.biletlerimnavbar .col-3');

    // Her bir butona tıklama olayı ekle
    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Eski etkin butonun sınıfını kaldır
            document.querySelector('.biletlerimnavbar .col-3.active').classList.remove('active');
            
            // Tıklanan butona aktif sınıfını ekle
            button.classList.add('active');
        });
    });
});
