<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    $sql = "SELECT * FROM parfum";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Parfum</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php include "../layout/header.php" ?>
    
    <section class="parfum-section">
    <h2>Daftar Parfum Terpopuler</h2>
    <div class="parfum-gallery">
        <?php 
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="parfum-item">
                    <a href="parfum-detail-user.php?id_parfum=<?php echo $row['id_parfum']; ?>">
                        <img src="../image/<?php echo $row['foto_parfum']; ?>" alt="<?php echo $row['nama_parfum']; ?>">
                        <h3><?php echo $row['brand'] . ' - ' . $row['nama_parfum']; ?></h3>
                    </a>
                    <p><?php echo $row['kategori']; ?></p>
                </div>
            <?php }
        } else {
            echo "Belum ada data parfum.";
        }
        ?>
    </div>
</section>


    <script src="../script.js"></script>

    <?php include "../layout/footer.html" ?>

</body>
</html>
