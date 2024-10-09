<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    $sql = "SELECT * FROM saran ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Saran</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <?php include "../layout/header.php" ?>

    <section id="saran-list">
        <h1>Daftar Saran dan Masukan</h1>

        <div class="table-container">
            <table class="table-saran" border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr class="table-saran-row">
                        <th class="table-saran-header">No</th>
                        <th class="table-saran-header">Nama</th>
                        <th class="table-saran-header">Email</th>
                        <th class="table-saran-header">Kategori</th>
                        <th class="table-saran-header">Saran</th>
                        <th class="table-saran-header">Tanggal</th>
                        <th class="table-saran-header">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr class='table-saran-row'>
                        <td class="table-saran-data"><?php echo $no++ ?></td>
                        <td class="table-saran-data"><?php echo htmlspecialchars($row['nama']) ?></td>
                        <td class="table-saran-data"><?php echo htmlspecialchars($row['email']) ?></td>
                        <td class="table-saran-data"><?php echo htmlspecialchars($row['kategori']) ?></td>
                        <td class="table-saran-data"><?php echo htmlspecialchars($row['saran']) ?></td>
                        <td class="table-saran-data"><?php echo htmlspecialchars($row['created_at']) ?></td>
                        <td class="table-saran-data">
                            <div class="button-UD">
                                <a href="edit-saran.php?id=<?php echo $row['id']?>">
                                    <button class="edit-data">
                                        <img src="../assets/icon-edit.png" alt="edit saran">
                                    </button>
                                </a>
                                <a href="hapus-saran.php?id=<?php echo $row['id']?>" 
                                onclick="return confirm('Yakin ingin menghapus data ini?');">
                                    <button class="hapus-data">
                                        <img src="../assets/icon-hapus.png" alt="hapus saran">
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <?php 
                        }
                    } else {
                        echo "<tr><td class='table-saran-data' colspan='7'>Belum ada saran yang dikirimkan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <?php include "../layout/footer.html" ?>

    <script src="../script.js"></script>
    
</body>
</html>
