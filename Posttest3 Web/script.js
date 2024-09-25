document.addEventListener('DOMContentLoaded', function() {
    // Dark Mode ala ala
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        if (darkModeToggle) {
            darkModeToggle.checked = true;
        }
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener('change', () => {
            if (darkModeToggle.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('darkMode', 'enabled');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('darkMode', null);
            }
        });
    }

   //toggle pada ulasan ahli//
    const toggleButton = document.querySelector('.toggle-button');
    if (toggleButton) {
        toggleButton.addEventListener('click', function() {
            const reviewContent = document.querySelector('.review-content');

            if (reviewContent.style.display === 'none' || reviewContent.style.display === '') {
                reviewContent.style.display = 'block';
                toggleButton.textContent = '-';
            } else {
                let konfirmasi = confirm("Sembunyikan ulasan?");
                if (konfirmasi) {
                    reviewContent.style.display = 'none';
                    toggleButton.textContent = '+';
                }
            }
        });
    }
});
