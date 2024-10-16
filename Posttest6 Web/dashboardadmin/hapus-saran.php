<?php 
include "../koneksi.php";
session_start();

if (!isset($_GET['id'])) {
    header("Location: saran-user.php");
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM saran WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'saran-user.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'saran-user.php';
    </script>";
}
?>
