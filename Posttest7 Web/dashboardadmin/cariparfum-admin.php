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
        while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="parfum-item">
                <div class="button-UD">
                    <a href="edit-parfum.php?id_parfum=<?php echo $row['id_parfum']; ?>">
                        <button class="edit-data">
                            <img src="../assets/light-icon-edit.png" alt="icon-edit">
                        </button>
                    </a>
                    <a href="hapus-parfum.php?id_parfum=<?php echo $row['id_parfum']; ?>">
                        <button class="hapus-data">
                            <img src="../assets/light-icon-hapus.png" alt="icon-hapus">
                        </button>
                    </a>
                </div>
                <a href="parfum-detail-admin.php?id_parfum=<?php echo $row['id_parfum']; ?>">
                    <img src="../image/<?php echo $row['foto_parfum']; ?>" alt="<?php echo $row['nama_parfum']; ?>">
                    <h3><?php echo $row['brand'] ?> - <?php echo $row['nama_parfum'] ?></h3>
                </a>
                <p><?php echo $row['kategori'] ?></p>
            </div>
        <?php }
    }
    else{
        echo "Tidak ditemukan parfum dengan kata kunci: " . htmlspecialchars($keyword);
}?>