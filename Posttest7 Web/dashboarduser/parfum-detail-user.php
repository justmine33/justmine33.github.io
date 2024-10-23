<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    $id_parfum = $_GET['id_parfum'];

    if ($id_parfum <= 0) {
        die("ID parfum tidak valid.");
    }

    $sql = "SELECT * FROM parfum WHERE id_parfum = $id_parfum";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $parfum = mysqli_fetch_assoc($result);

    if (!$parfum) {
        die("-Parfum tidak ditemukan.");
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($parfum['nama_parfum']); ?> - Detail Parfum</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include "../layout/header.php" ?>

    <section class="parfum-detail">
        <?php if (!empty($parfum['foto_parfum'])): ?>
        <div class="parfum-image">
            <img src="../image/<?php echo htmlspecialchars($parfum['foto_parfum']); ?>" alt="<?php echo htmlspecialchars($parfum['nama_parfum']); ?>">
        </div>
        <?php endif; ?>
        <div class="parfum-info">
            <h2><?php echo $parfum['nama_parfum']; ?></h2>
            <p><strong>Brand: </strong> <?php echo $parfum['brand']; ?></p>
            <?php if (!empty($parfum['kategori'])): ?>
            <p><strong>Kategori: </strong> <?php echo $parfum['kategori']; ?></p>
            <?php endif; ?>
            <p><strong>Top Notes:</strong><?php echo $parfum['top_notes'] ?></p>
            <p><strong>Middle Notes: </strong><?php echo $parfum['middle_notes'] ?></p>
            <p><strong>Base Notes: </strong><?php echo $parfum['base_notes'] ?></p>
            <?php if (!empty($parfum['tahun_rilis'])): ?>
            <p><strong>Tahun Rilis: </strong> <?php echo $parfum['tahun_rilis']; ?></p>
            <?php endif; ?>
            <?php if (!empty($parfum['deskripsi'])): ?>
            <p><strong>Deskripsi: </strong> <?php echo $parfum['deskripsi']; ?></p>
            <?php endif; ?>
        </div>
    </section>

    <script src="../script.js"></script>

    <?php include "../layout/footer.html" ?>
    
</body>
</html>