document.querySelectorAll('.click_popup').forEach(el => {
    el.addEventListener('click', function () {
        document.getElementById('popup-banggia').style.display = 'flex';
    });
});

document.querySelector('.close-popup').addEventListener('click', function () {
    document.getElementById('popup-banggia').style.display = 'none';
});

// Tắt popup khi click ra ngoài
document.getElementById('popup-banggia').addEventListener('click', function(e) {
    if (e.target === this) {
        this.style.display = 'none';
    }
});

// Tự động mở popup sau 28 giây
setTimeout(function () {
    var popup = document.getElementById('popup-banggia');
    if (popup) {
        popup.style.display = 'flex';
    }
}, 15000);

