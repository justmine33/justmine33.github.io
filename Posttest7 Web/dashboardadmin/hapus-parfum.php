<?php 
    include "../koneksi.php";
    session_start();

    if (!isset($_SESSION['is_login'])) {
        header("Location: ../index.php");
        exit();
    }

    if (!isset($_GET['id_parfum'])) {
        header("Location: daftar-parfum-admin.php");
        exit();
    }

    $id = $_GET['id_parfum'];

    $sql = "DELETE FROM parfum WHERE id_parfum = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'daftar-parfum-admin.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus: " . mysqli_error($conn) . "');
            document.location.href = 'daftar-parfum-admin.php';
        </script>";
    }
?>
