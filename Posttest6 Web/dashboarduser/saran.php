<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    echo $_SESSION['username'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_SESSION['username'];
        $emailUser = $_POST['emailUser'];
        $kategoriSaran = $_POST['kategoriSaran'];
        $saranUser = $_POST['saranUser'];

        $sql = "INSERT INTO saran (nama, email, kategori, saran) VALUES ('$username', '$emailUser', '$kategoriSaran', '$saranUser')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Saran berhasil dikirim!');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Saran</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <?php include "../layout/header.php" ?>

    <section id="saran" class="form-saran">
        <h1>Kirim Saran atau Masukan</h1>
        <form action="" method="POST">
            <div class="form">
                <label for="emailUser">Email:</label>
                <input type="email" name="emailUser" placeholder="Email" required>
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
                <textarea name="saranUser" placeholder="Masukkan Saran" rows="5" required></textarea>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </section>

    <script src="../script.js"></script>

    <?php include "../layout/footer.html" ?>
    
</body>
</html>