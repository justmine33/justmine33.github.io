<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Saran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Parfum Gallery</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="parfum.html">Daftar Parfum</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="saran" class="form-saran">
        <h1>Kirim Saran atau Masukan</h1>
        <form action="" method="POST">
            <div class="form">
                <label for="namaUser">Nama:</label>
                <input type="text" name="namaUser" required>
            </div>
            <div class="form">
                <label for="emailUser">Email:</label>
                <input type="email" name="emailUser" required>
            </div>
            <div class="form">
                <label for="kategoriSaran">Kategori:</label>
                <select name="kategoriSaran" required>
                    <option value="">Pilih kategori</option>
                    <option value="kritik">Kritik</option>
                    <option value="saran">Saran</option>
                    <option value="pertanyaan">Pertanyaan</option>
                </select>
            </div>
            <div class="form">
                <label for="saranUser">Saran:</label>
                <textarea name="saranUser" rows="5" required></textarea>
            </div>
            <button type="submit">Kirim</button>
        </form>

        <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $namaUser = htmlspecialchars($_POST["namaUser"]);
                $emailUser = htmlspecialchars($_POST["emailUser"]);
                $kategoriSaran = htmlspecialchars($_POST["kategoriSaran"]);
                $saranUser = htmlspecialchars($_POST["saranUser"]);
                
                echo "<div class='hasil-input'>";
                echo "<h3>Saran anda sudah kami terima!!</h3>";
                echo "<p>Nama: " . $namaUser . "</p>";
                echo "<p>Email: " . $emailUser . "</p>";
                echo "<p>Kategori: " . $kategoriSaran . "</p>";
                echo "<p>Saran: " . $saranUser . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <script src="script.js"></script>

    <footer>
        <p>&copy; 2024 Parfum Gallery. All rights reserved.</p>
    </footer>
</body>
</html>
