<?php

    include "../koneksi.php";

    $keyword = $_GET['cari'];
    $sql = "SELECT * FROM parfum WHERE 
            nama_parfum LIKE '%" . $keyword . "%' OR 
            brand LIKE '%" . $keyword . "%'";
    $result = mysqli_query($conn, $sql);
   
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

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
        echo "Tidak ditemukan parfum dengan kata kunci: " . htmlspecialchars($keyword);
    }
?>