<?php
session_start();
var_dump($_SESSION);
session_unset();
if(session_destroy()){
    header('Location:index.php');
    exit();
} else {
    echo "<p>Logout gagal. Silakan coba lagi.</p>";
}
?>