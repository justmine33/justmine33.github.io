<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    if (!isset($_GET['id_parfum'])) {
        die("ID parfum tidak ditemukan.");
    }

    $id_parfum = $_GET['id_parfum'];

    $sql = "SELECT * FROM parfum WHERE id_parfum = '$id_parfum'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $parfum = mysqli_fetch_assoc($result);
    if (!$parfum) {
        die("Data parfum tidak ditemukan.");
    }

    if (isset($_POST['submit'])) {
        $brand = $_POST['brand'];
        $nama_parfum = $_POST['nama_parfum'];
        $kategori = $_POST['kategori'];
        $top_notes = $_POST['top_notes'];
        $middle_notes = $_POST['middle_notes'];
        $base_notes = $_POST['base_notes'];
        $deskripsi = $_POST['deskripsi'];
        $tahun_rilis = $_POST['tahun_rilis'];

        $oldImg = $parfum['foto_parfum'];
        $file_name = $oldImg;

        if ($_FILES['foto_parfum']['error'] === 0) {
            $tmp_name = $_FILES['foto_parfum']['tmp_name'];
            $file_name = $_FILES['foto_parfum']['name'];
            $validExtensions = ['png', 'jpg', 'jpeg'];
            $fileExtension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            
            if (in_array($fileExtension, $validExtensions)) {
                move_uploaded_file($tmp_name, '../image/' . $file_name);
                if ($oldImg && file_exists('../image/' . $oldImg)) {
                    unlink('../image/' . $oldImg);
                }
                $sql = "UPDATE parfum SET brand = '$brand', nama_parfum = '$nama_parfum', kategori = '$kategori', tahun_rilis= '$tahun_rilis', deskripsi= '$deskripsi',top_notes = '$top_notes', middle_notes = '$middle_notes', base_notes = '$base_notes', foto_parfum = '$file_name' WHERE id_parfum = '$id_parfum'";

                $result = mysqli_query($conn, $sql);

                    if ($result){
                        echo "<script>document.location.href='daftar-parfum-admin.php'</script>";
                        echo "<script>alert('Pembaruan tersimpan');</script>";
                    }
                    else{
                        echo "<script>alert('Gagal meyimpan pembaruan!');</script>";
                    }
            } else {
                echo "<script>alert('Tolong upload file gambar dengan format png, jpg, atau jpeg!');</script>";
            }
        }

        if (mysqli_query($conn, $sql)) {
            header("Location: daftar-parfum-admin.php");
            exit();
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parfum</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .edit-parfum-section {
            background: var(--bg-item);
            color: var(--text-color); 
            margin: 50px auto;
            max-width: 500px;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .edit-parfum-section h2 {
            text-align: center;
            color: var(--text-color);
        }

        .edit-parfum-section form div {
            margin-bottom: 15px;
        }

        .edit-parfum-section label {
            display: block;
            margin-bottom: 5px;
        }

        .edit-parfum-section input{
            width: 100%;
            padding: 8px;
            border: 1px solid var(--header-bg);
            border-radius: 4px;
            background-color: var(--bg-item); 
            color: var(--text-color);
        }

        .edit-parfum-section button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: var(--header-bg); 
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: var(--text-color);
            font-weight: bold;
        }

        .edit-parfum-section button:hover {
            background-color: var(--saran-hover);
        }
    </style>
</head>
<body>

    <?php include "../layout/header.php" ?>

    <section class="edit-parfum-section">
        <h2>Edit Parfum</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" value="<?php echo htmlspecialchars($parfum['brand']); ?>" required>
            </div>
            <div>
                <label for="nama_parfum">Nama Parfum:</label>
                <input type="text" id="nama_parfum" name="nama_parfum" value="<?php echo htmlspecialchars($parfum['nama_parfum']); ?>" required>
            </div>
            <div>
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" value="<?php echo htmlspecialchars($parfum['kategori']); ?>" required>
            </div>
            <div>
                <label for="top_notes">Top Notes:</label>
                <input type="text" id="top_notes" name="top_notes" value="<?php echo htmlspecialchars($parfum['top_notes']); ?>" required>
            </div>
            <div>
                <label for="middle_notes">Middle Notes:</label>
                <input type="text" id="middle_notes" name="middle_notes" value="<?php echo htmlspecialchars($parfum['middle_notes']); ?>" required> 
            </div>
            <div>
                <label for="base_notes">Base Notes:</label>
                <input type="text" id="base_notes" name="base_notes" value="<?php echo htmlspecialchars($parfum['base_notes']); ?>" required> 
            </div>
            <div>
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi" value="<?php echo htmlspecialchars($parfum['deskripsi']); ?>">
            </div>
            <div>
                <label for="tahun_rilis">Tahun:</label>
                <select id="tahun_rilis" name="tahun_rilis" required>
                    <option value="" disabled selected>Pilih Tahun</option>
                    <?php
                        $currentYear = date('Y');
                        for ($i = $currentYear; $i >= 2000; $i--) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="foto_parfum">Foto:</label>
                <input type="file" name="foto_parfum" id="foto_parfum">
            </div>
            <button type="submit" name="submit">Simpan Perubahan</button>
        </form>
    </section>

    <?php include "../layout/footer.html" ?>
    
    <script src="../script.js"></script>

</body>
</html>
