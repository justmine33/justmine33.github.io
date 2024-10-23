<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM saran WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_SESSION['username'];
        $emailUser = $_POST['emailUser'];
        $kategoriSaran = $_POST['kategoriSaran'];
        $saranUser = $_POST['saranUser'];

        $sqlUpdate = "UPDATE saran SET nama ='$nama',email='$emailUser', kategori='$kategoriSaran', saran='$saranUser' WHERE id=$id";

        if (mysqli_query($conn, $sqlUpdate)) {
            echo "<script>alert('Saran berhasil diperbarui!'); window.location.href='saran-user.php';</script>";
        } else {
            echo "Error: " . $sqlUpdate . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Saran</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <?php include "../layout/header.php" ?>

    <section id="saran" class="form-saran">
        <h1>Edit Saran</h1>
        <form action="" method="POST">
            <div class="form">
                <label for="emailUser">Email:</label>
                <input type="email" name="emailUser" value="<?php echo htmlspecialchars($row['email']); ?>" required>
            </div>
            <div class="form">
                <label for="kategoriSaran">Kategori:</label>
                <select name="kategoriSaran" required>
                    <option value="">Pilih kategori</option>
                    <option value="kritik" <?php echo ($row['kategori'] == 'kritik') ? 'selected' : ''; ?>>Kritik</option>
                    <option value="saran" <?php echo ($row['kategori'] == 'saran') ? 'selected' : ''; ?>>Saran</option>
                    <option value="pertanyaan" <?php echo ($row['kategori'] == 'pertanyaan') ? 'selected' : ''; ?>>Pertanyaan</option>
                </select>
            </div>
            <div class="form">
                <label for="saranUser">Saran:</label>
                <textarea name="saranUser" rows="5" required><?php echo htmlspecialchars($row['saran']); ?></textarea>
            </div>
            <button type="submit">Perbarui</button>
        </form>
    </section>

    <script src="../script.js"></script>

    <?php include "../layout/footer.html" ?>
    
</body>
</html>
