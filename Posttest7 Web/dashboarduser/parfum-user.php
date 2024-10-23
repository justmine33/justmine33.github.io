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
    <style>
        .search-box {
            position: relative;
            width: 100%;
            max-width: 400px;
            margin: 20px 0;
        }

        .search-box input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 16px;
        }

        .search-box input:focus {
            outline: none;
            border-color: #666;
        }

        .search-box .search-icon {
            position: absolute;
            left: 15px;
            top: 25%;
            width: 20px;
            height: 20px;
        }

        .search-box input::placeholder {
            color: #aaa;
            font-style: italic;
        }
    </style>
</head>
<body>

    <?php include "../layout/header.php" ?>
    
    <section class="parfum-section">
    <h2>Daftar Parfum Terpopuler</h2>

    <div class="search-box">
        <img src="../assets/icon-search.png" alt="Search Icon" class="search-icon">
        <input type="text" name="keyword" id="keyword" placeholder="Cari berdasarkan nama atau brand..." oninput="ajax()">
    </div>

    <div id="parfum-gallery" class="parfum-gallery">
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

<script>
    function ajax() {
        var xhr = new  XMLHttpRequest();  
        xhr.onreadystatechange = function() {
              if (xhr.readyState == 4){
                 if (xhr.status == 200 ){
                    document.getElementById('parfum-gallery').innerHTML = xhr.responseText; 
                 }
              }
        }
        var keyword = document.getElementById("keyword").value;
        xhr.open("GET", "cariparfum-user.php?cari=" + keyword, true);
        xhr.send();
    }
</script>