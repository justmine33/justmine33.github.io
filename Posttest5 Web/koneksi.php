<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "dbparfumgallery";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if(!$conn){
        die("Gagal Terhubung ke Database: " . mysqli_connect_error());
    }
?>