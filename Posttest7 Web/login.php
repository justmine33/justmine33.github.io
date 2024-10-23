<?php
    include "koneksi.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE nama='$username'";
        $result = mysqli_query($conn, $sql);

        if($result){
            $data = mysqli_fetch_assoc($result);

            if($data && password_verify($password, $data['password'])){
                session_start();
                $_SESSION['username'] = $data['nama'];
                $_SESSION['role'] = $data['role'];
                $_SESSION['is_login'] = true;

                if($data['role'] == 'a'){
                    header("location: dashboardadmin/daftar-parfum-admin.php");
                    exit();
                } else {
                    header("location: dashboarduser/dashboarduser.php");
                    exit();
                }
            } else {
                echo '<script>alert("Username atau password salah.")</script>';
            }
        } else {
            die("Query error: " . mysqli_error($conn));
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .register-login:hover{
            color:deepskyblue;
        }
    </style>
</head>
<body>

    <?php include "layout/header.php" ?>

    <section id="login" class="login-section">
        <h2>Login</h2>
        <form action="login.php" method="POST" class="form-login">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Jika belum memiliki akun bisa regist terlebih dahulu <a href= "register.php" class="register-login"><u>disini</u></a></p>
    </section>

    <section id="tips" class="tips-section">
        <h2>Tips & Artikel</h2>
        <article class="article">
            <h3>Tips Memilih Parfum</h3>
            <p>Pelajari cara memilih parfum yang sesuai dengan kepribadian dan acara Anda.</p>
            <a href="https://cnfstore.com/blog/post/cara-memilih-parfum">Baca Selengkapnya</a>
        </article>
        <article class="article">
            <h3>Cara Merawat Parfum</h3>
            <p>Temukan cara merawat parfum agar tetap awet dan tidak rusak.</p>
            <a href="https://www.watsons.co.id/id/blog/latest-trend-id/6-tips-menyimpan-parfum-agar-awet">Baca Selengkapnya</a>
        </article>
    </section>

    <script src="script.js"></script>

    <?php include "layout/footer.html" ?>
    
</body>
</html>