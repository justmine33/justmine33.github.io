<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
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

        $file_name = '';

        if ($_FILES['foto_parfum']['error'] === 0) {
            $tmp_name = $_FILES['foto_parfum']['tmp_name'];
            $fileSize = $_FILES['foto_parfum']['size'];
            $file_name = $_FILES['foto_parfum']['name'];
            $validExtensions = ['png', 'jpg', 'jpeg'];
            $fileExtension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $maxSize = 2 * 1024 * 1024;

            if (in_array($fileExtension, $validExtensions)) {
                if($fileSize <= $maxSize){
                    $file_name_date = date('Y-m-d H.i.s') . '.' . $fileExtension;
                    move_uploaded_file($tmp_name, '../image/' . $file_name_date);
                    $sql = "INSERT INTO parfum (brand, nama_parfum, kategori, top_notes, middle_notes, base_notes, deskripsi, tahun_rilis, foto_parfum) 
                    VALUES ('$brand', '$nama_parfum', '$kategori', '$top_notes', '$middle_notes', '$base_notes', '$deskripsi', '$tahun_rilis', '$file_name_date')";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        header("Location: daftar-parfum-admin.php");
                        echo "<script>alert('Pembaruan tersimpan');</script>";
                    }
                    else{
                        echo "<script>alert('Gagal meyimpan data!');</script>";
                    }
                }else{
                    echo "<script>alert('Ukuran file melebihi 2MB!');</script>";
                }
            } else {
                echo "<script>alert('Tolong upload file gambar dengan format png, jpg, atau jpeg!');</script>";
                // $file_name = '';
            }
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
        .tambah-parfum-section {
            background: var(--bg-item);
            color: var(--text-color); 
            margin: 50px auto;
            max-width: 500px;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tambah-parfum-section h2 {
            text-align: center;
            color: var(--text-color);
        }

        .tambah-parfum-section form div {
            margin-bottom: 15px;
        }

        .tambah-parfum-section label {
            display: block;
            margin-bottom: 5px;
        }

        .tambah-parfum-section input{
            width: 100%;
            padding: 8px;
            border: 1px solid var(--header-bg);
            border-radius: 4px;
            background-color: var(--bg-item); 
            color: var(--text-color);
        }

        .tambah-parfum-section button {
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

        .tambah-parfum-section button:hover {
            background-color: var(--saran-hover);
        }
    </style>
</head>
<body>

    <?php include "../layout/header.php" ?>

    <section class="tambah-parfum-section">
        <h2>Edit Parfum</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" required>
            </div>
            <div>
                <label for="nama_parfum">Nama Parfum:</label>
                <input type="text" id="nama_parfum" name="nama_parfum" required>
            </div>
            <div>
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" required>
            </div>
            <div>
                <label for="top_notes">Top Notes:</label>
                <input type="text" id="top_notes" name="top_notes" required>
            </div>
            <div>
                <label for="middle_notes">Middle Notes:</label>
                <input type="text" id="middle_notes" name="middle_notes" required> 
            </div>
            <div>
                <label for="base_notes">Base Notes:</label>
                <input type="text" id="base_notes" name="base_notes" required> 
            </div>
            <div>
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi">
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
                <input type="file" name="foto_parfum" id="foto_parfum" required>
            </div>
            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </section>

    <?php include "../layout/footer.html" ?>

    <script src="../script.js"></script>

</body>
</html>