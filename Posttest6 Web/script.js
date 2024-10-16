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
    function setupToggle(toggleButtonSelector, contentSelector) {
        const toggleButton = document.querySelector(toggleButtonSelector);
        const content = document.querySelector(contentSelector);
        
        if (toggleButton && content) {
            toggleButton.addEventListener('click', function() {
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'block';
                    toggleButton.textContent = '-';
                } else {
                    let konfirmasi = confirm("Sembunyikan ulasan?");
                    if (konfirmasi) {
                        content.style.display = 'none';
                        toggleButton.textContent = '+';
                    }
                }
            });
        }
    }
    
    setupToggle('.expert-review .toggle-button', '.expert-review .review-content');
    
});