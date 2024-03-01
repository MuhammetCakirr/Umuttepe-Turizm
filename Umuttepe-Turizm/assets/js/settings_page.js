// script.js
document.addEventListener('DOMContentLoaded', function () {
    // Sayfa yüklendiğinde varsayılan içeriği yükle
    loadContent('application/views/settings/kayitli_kartlarim.php');

    // Menü bağlantılarına tıklanınca içeriği yükle
    document.getElementById('wizardNav').addEventListener('click', function (event) {
        if (event.target.tagName === 'A') {
            event.preventDefault();
            var contentFile = event.target.getAttribute('data-content');
            loadContent(contentFile);
        }
    });
});

function loadContent(contentFile) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', contentFile, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('contentPlaceholder').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}





