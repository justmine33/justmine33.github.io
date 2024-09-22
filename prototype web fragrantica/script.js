document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

//script untuk bagian ulasan ahli//
document.querySelector('.toggle-button').addEventListener('click', function() {
    const reviewContent = document.querySelector('.review-content');
    const toggleButton = document.querySelector('.toggle-button');

    if (reviewContent.style.display === 'none' || reviewContent.style.display === '') {
        reviewContent.style.display = 'block';
        toggleButton.textContent = '-'; // Mengubah tombol menjadi -
    } else {
        let konfirmasi = confirm("Sembunyikan ulasan?");
        if (konfirmasi) {
            reviewContent.style.display = 'none';
            toggleButton.textContent = '+'; // Mengubah tombol kembali menjadi +
        }
    }
});

