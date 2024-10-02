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

        const parfumData = {
            "Galleria": {
                name: "Galleria",
                brand: "Alchemist Fragrance",
                jenisAroma: "Floral",
                topNotes: "Cap Jasmine, Plum",
                middleNotes: "Tuberose, Oiellet",
                baseNotes: "Honey, Redwood",
                description: "Floral dan classy - Galleria akan menyapamu dengan aroma Tuberose, Honey dan Plum...",
                image: "image/galleria.jpeg",
                expert: {
                    name: "Sarah Amara - Ahli Parfum",
                    rating: "4.5/5",
                    review: "Galleria adalah parfum yang elegan dengan aroma floral yang kuat namun lembut..."
                }
            },
            "Potrait Of Kyoto": {
                name: "Potrait Of Kyoto",
                brand: "The Body Tale",
                jenisAroma: "Tea",
                topNotes: "Earl Grey Tea, Apple, Honey, Mandarin",
                middleNotes: "Jasmine, Black Tea, Freesia, Irish",
                baseNotes: " Musk, Papper, Sandalwoood, Amber",
                description: "The Body Tale Portrait of Kyoto merupakan parfum yang terinspirasi dari suasana morning holiday di luxury hotel at Kyoto sambil enjoying your morning tea. Very fresh, elegance dan luxury.",
                image: "image/potrait-of-kyoto.jpeg",
                expert: {
                    name: "Michael Tanaka - Ahli Parfum",
                    rating: "4.7/5",
                    review: "Potrait of Kyoto adalah parfum yang berhasil menangkap esensi kesegaran pagi hari di Kyoto. Aroma Earl Grey Tea dan Apple memberikan kesan segar dan menenangkan, seolah berada di sebuah resort mewah sambil menikmati secangkir teh. Jasmine dan Black Tea pada middle notes menambah lapisan floral yang subtle namun elegan, sementara base notes dari Musk dan Sandalwood menciptakan kesan hangat dan earthy. Parfum ini cocok untuk mereka yang menghargai kesederhanaan, namun tetap ingin tampil elegan dan sophisticated."
                }
            },
            "Aphrodite": {
                name: "Aphrodite",
                brand: "Mykonos",
                jenisAroma: "Spicy Aromtic",
                topNotes: "Jasmine, Burnt Cinnamon, Myrrh",
                middleNotes: "Cedarwood, Tonkabean, Sandalwood",
                baseNotes: "White Musk, Tobacco, Vanilla, Mineral Amber",
                description: "Aphrodite merupakan parfum dengan aroma hangat dari woody & aromatic Myrrh yang menghipnotis pada semprotan pertama, bertransisi menjadi sweet & smoky burnt cinnamon, dengan hembusan white floral yang elegan, menari di atas panggung tembakau yang seksi namun halus.",
                image: "image/aphrodite.jpeg",
                expert: {
                    name: "Amelie Dupont - Ahli Parfum",
                    rating: "4.8/5",
                    review: "Aphrodite adalah parfum yang berani dan memikat, dengan perpaduan sempurna antara spicy dan woody notes. Aroma pertama yang tercium adalah sentuhan Jasmine dan Burnt Cinnamon, menciptakan kombinasi yang unik antara keharuman bunga dan rempah yang intens. Middle notes dari Cedarwood dan Sandalwood memberikan kesan kayu yang hangat, sementara Tonkabean menambahkan sedikit sentuhan manis. Base notes dari White Musk dan Tobacco memberikan dimensi sensual yang smoky, dengan sedikit Vanilla dan Amber untuk menyeimbangkan keseluruhan aroma. Parfum ini cocok untuk digunakan di malam hari atau acara-acara khusus, karena memberikan aura misterius dan menggoda."
                }
            },
            "Reverie": {
                name: "Reverie",
                brand: "Alt Parfumery",
                jenisAroma: "White Floral Aromatic",
                topNotes: "Tuberose, White Flower",
                middleNotes: "Blackcurrant, Davana",
                baseNotes: "Vanilla, Myrrh",
                description: "Reverie adalah parfum white floral yang unik. Percampuran antara davana dan balckcurrant menjadikan aroma parfum ini memiliki sedikit hint bubblegum.",
                image: "image/reverie.jpeg",
                expert: {
                    name: "Isabelle Laurent -  Ahli Parfum",
                    rating: "4.4/5",
                    review: " Reverie dari Alt Parfumery adalah parfum yang menarik dengan perpaduan aroma white floral yang menonjol. Pada kesan pertama, Tuberose dan White Flower memberikan nuansa segar dan bersih, namun dengan keunikan tersendiri berkat Blackcurrant dan Davana yang menambahkan kesan fruity dan sedikit manis seperti bubblegum. Base notes dari Vanilla dan Myrrh memberikan kehangatan yang bertahan lama, memberikan kesan aroma yang kaya dan memikat. Parfum ini cocok untuk mereka yang menyukai aroma floral dengan sentuhan manis, ideal untuk penggunaan sehari-hari maupun acara spesial."
                }
            },
            "First Kiss": {
                name: "First Kiss",
                brand: "Crusita",
                jenisAroma: "White FLoral Fresh",
                topNotes: "Blackcurrant, Papper",
                middleNotes: "Jasmine, Muguet, Rose",
                baseNotes: "Amber, Musk, Vanilla",
                description: "First kiss adalah parfum dengan tipe aroma fresh yang akan membuat kamu membayangkan suasana pagi yang cerah, waktunya kamu santai dan memanjakan diri, it feels like sunday morning with a cup of tea",
                image: "image/first-kiss.jpeg",
                expert: {
                    name: "Emma Rousselle - Ahli Parfum",
                    rating: "4.8/5",
                    review: "First Kiss dari Crusita adalah parfum yang ringan dan menyegarkan, cocok untuk digunakan di pagi hari. Blackcurrant dan Papper pada top notes memberikan kesan pertama yang segar dan spicy, disusul oleh middle notes dari Jasmine, Muguet, dan Rose yang memberikan sentuhan floral yang lembut. Parfum ini menciptakan suasana yang tenang dan santai, seperti menikmati pagi hari yang cerah dengan secangkir teh. Base notes dari Amber, Musk, dan Vanilla menambah dimensi hangat yang lembut pada akhir aroma, menjadikannya parfum yang sempurna untuk penggunaan sehari-hari, terutama di musim semi dan musim panas."
                }
            },
            "Troupe": {
                name: "Troupe",
                brand: "Saff n Co",
                jenisAroma: "Fruity Floral",
                topNotes: "Citrus, Pear",
                middleNotes: "Rose, Orange Blossom, Freesia",
                baseNotes: "PAtchoulli, Musk, Amber",
                description: "Troupe adalah parfum dengan aroma floral dan fruity yang halus. Troupe memiliki aroma yang tenang dan manis, namun cukup berkelas untuk mencuri perhatian orang-orang disekitar anda.",
                image: "image/troupe.jpeg",
                expert: {
                    name: "Antoine Lefèvre - Ahli Parfum",
                    rating: "4.5/5",
                    review: "Troupe dari Saff n Co adalah parfum yang memadukan kesegaran aroma buah dengan kelembutan floral, menghasilkan kesan yang tenang namun tetap elegan. Top notes dari Citrus dan Pear menciptakan bukaan yang segar dan menyegarkan, sementara middle notes dari Rose, Orange Blossom, dan Freesia memberikan sentuhan floral yang manis dan berkelas. Pada lapisan akhirnya, Patchouli, Musk, dan Amber memberikan kehangatan yang halus namun tahan lama, memperkuat kesan sophisticated dari parfum ini. Troupe sangat cocok untuk mereka yang menyukai keseimbangan antara aroma fruity dan floral yang tidak terlalu mencolok, namun tetap meninggalkan kesan mendalam."
                }
            },
            "Morrocan Sunset": {
                name: "Morrocan Sunset",
                brand: "Alt Parfumery",
                jenisAroma: "Sweet Aromatic",
                topNotes: "Neroli, Bergamot, Red Fruits",
                middleNotes: "Orange Blossom, Jasmine, Cinnamon, Resin",
                baseNotes: "Vanilla, Caramel, Musk, Cedarwood",
                description: "Morrocan sunset merupakan sebuah parfum yang terinspirasi dari keajaiban neroli. sebuah tanaman dengan aroma unik yang berasal dari marroco yang merupakan one of sexiest destination in the world",
                image: "image/morrocan-sunset.jpeg",
                expert: {
                    name: "Clara Devereux - Ahli Parfum",
                    rating: "4.6/5",
                    review: "Morrocan Sunset dari Alt Parfumery adalah parfum yang sensual dengan keseimbangan aroma floral dan manis yang kompleks. Neroli dan Red Fruits pada top notes memberikan kesan awal yang segar dan fruity, disusul oleh Orange Blossom dan Jasmine yang memberikan aroma floral yang lembut namun memikat. Middle notes dari Cinnamon dan Resin menambahkan lapisan kehangatan yang menggoda. Pada base notes, perpaduan Vanilla, Caramel, dan Cedarwood menciptakan kesan manis dan earthy yang mendalam, memberikan nuansa yang mewah dan eksotis. Parfum ini cocok untuk malam hari atau acara-acara spesial di mana Anda ingin meninggalkan kesan yang abadi.."
                }
            },
            "Gratitude": {
                name: "Gratitude",
                brand: "Onix",
                jenisAroma: "Fruity Floral Sweet",
                topNotes: "Green, Fruity, Ozone",
                middleNotes: "White Floral, Caramel, Lactone, Violet",
                baseNotes: "Amber, Musk, Vanilla, Sandalwood, Cedarwood",
                description: "Gratitude adalah parfum dengan aroma fresh floral yang elegant. Cocok untuk menemani segala aktivitas harianmu",
                image: "image/gratitude.jpeg",
                expert: {
                    name: "Isabelle Marceau - Ahli Parfum",
                    rating: "4.4/5",
                    review: "Gratitude dari Onix menawarkan pengalaman aroma floral yang elegan dan menyegarkan. Top notes yang terdiri dari aroma Green dan Fruity memberikan kesegaran pertama yang sangat menenangkan, disusul dengan lapisan Ozone yang segar. Middle notes dari White Floral dan sentuhan manis dari Caramel serta Lactone menciptakan perpaduan yang lembut dan feminin. Pada akhirnya, base notes dari Amber, Musk Vanilla, dan Sandalwood memberikan kesan hangat dan sensual, diperkaya oleh Cedarwood untuk nuansa yang lebih earthy. Parfum ini sempurna untuk mereka yang ingin menghadirkan keanggunan dalam setiap kesempatan harian mereka."
                }
            },
            "Satin Blanc": {
                name: "Satin Blanc",
                brand: "Mykonos",
                jenisAroma: "Fruity Fresh Sweet",
                topNotes: "Bergamot, Balck Papper, Green Apple",
                middleNotes: "Cedarwood, Jasmine Tea, Floral Bouquet, Aquatic",
                baseNotes: "White Amber, Tonkabean, Vanilla",
                description: "Satin blanc merupakan parfum dengan aroma fresh juiciness dari orchid fresh apples",
                image: "image/satin-blanc.jpeg",
                expert: {
                    name: "Isabelle Marceau - Ahli Parfum",
                    rating: "4.8/5",
                    review: "Satin Blanc adalah parfum yang menyajikan harmoni sempurna antara keharuman fruity dan fresh. Top notes dari Bergamot, Black Pepper, dan Green Apple langsung memikat dengan kesegaran citrusy yang tajam. Middle notes membawa aroma yang lebih lembut dan menenangkan dari Cedarwood dan Jasmine Tea, diperkaya dengan bouquet floral yang menambahkan sentuhan feminin. Unsur aquatic menciptakan kesan ringan dan airy. Base notes yang terdiri dari White Amber, Tonkabean, dan Vanilla memberikan fondasi hangat yang menambahkan dimensi manis dan menggoda. Satin Blanc sangat cocok untuk digunakan sepanjang hari, memberikan sentuhan elegan namun tetap ringan."
                }
            }
        };
        
        const params = new URLSearchParams(window.location.search);
        const parfumId = params.get('id');
        
        if (parfumData[parfumId]) {
            const parfum = parfumData[parfumId];
        
            document.getElementById("parfum-name").textContent = parfum.name;
            document.getElementById("parfum-brand").textContent = parfum.brand;
            document.getElementById("parfum-jenis").textContent = parfum.jenisAroma;
            document.getElementById("parfum-top-notes").textContent = parfum.topNotes;
            document.getElementById("parfum-middle-notes").textContent = parfum.middleNotes;
            document.getElementById("parfum-base-notes").textContent = parfum.baseNotes;
            document.getElementById("parfum-description").textContent = parfum.description;
            document.getElementById("parfum-image").src = parfum.image;
            document.getElementById("expert-name").textContent = parfum.expert.name;
            document.getElementById("expert-rating").textContent = parfum.expert.rating;
            document.getElementById("expert-review").textContent = parfum.expert.review;
        } else {
            document.querySelector('.parfum-info').innerHTML = "<p>Data Parfum Tidak Ditemukan.</p>";
        }
});