<?php 
    include "koneksi.php";
    // session_start();

    // if (!isset($_SESSION['is_login'])) {
    //     header("Location: ../login.php");
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Parfum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "layout/header.php" ?>
    

    <!-- Hero Section (Beranda) -->
    <section id="beranda" class="hero">
        <div class="hero-content">
            <h2>Temukan Parfum yang Sesuai dengan Karaktermu</h2>
            <p>Eksplorasi berbagai jenis parfum lokal</p>
        </div>
    </section>

    <!-- About me Section -->
    <section id="about" class="about-section">
        <h2>About Me</h2>
        <p>
            Saya adalah pecinta parfum yang ingin berbagi pengetahuan tentang parfum lokal. Menurut saya parfum adalah media untuk mengekspresikan diri.<br>
            Nama: Putri Jasmine<br>
            NIM: 2309106051<br>
            No Telepon: 082255361114<br>
            Email: <a href="mailto:Jasminefhrl1@gmail.com">Jasminefhrl1@gmail.com</a><br>
            Instagram: <a href="https://www.instagram.com/ptr.jasmine__?igsh=bjlhNndpN3hsMTll" class="ig">@ptr.jasmine__</a><br>
        </p>
    </section>

    <!-- Article/Tips Section -->
    <section id="tips" class="tips-section">
        <h2>Tips & Artikel</h2>
        <article class="article">
            <h3>Tips Memilih Parfum</h3>
            <p>Pelajari cara memilih parfum yang sesuai dengan kepribadian dan acara Anda.</p>
            <a href="https://cnfstore.com/blog/post/cara-memilih-parfum">Baca Selengkapnya</a>
        </article>
        <article class="article">
            <h3>Cara Merawat Parfum</h3>
            <p>Temukan cara merawat parfum agar tetap awet dan tidak rusak.</p>
            <a href="https://www.watsons.co.id/id/blog/latest-trend-id/6-tips-menyimpan-parfum-agar-awet">Baca Selengkapnya</a>
        </article>
    </section>

    <!-- Footer -->
    <?php include "layout/footer.html" ?>

    <script src="script.js"></script>
</body>
</html>
