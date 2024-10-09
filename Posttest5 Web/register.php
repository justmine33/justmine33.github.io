<?php 
    include "koneksi.php";

    if(isset($_POST['regist'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO user(nama, password, email, role) VALUES('$username', '$password', '$email', 'u')";
        
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Username atau password salah.")</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .regist-section {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            flex-direction: row;
            row-gap: 2px;
        }

        .regist-section h2 {
            text-align: center;
            color: #333;
        }

        .regist-section p {
            text-align: center;
            color: var(--text-color);
        }

        .login-register:hover{
            color:deepskyblue;
        }

        .form-regist input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .regist-section button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: var(--header-bg); 
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: var(--text-color);
        }

        .regist-section button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <?php include "layout/header.php" ?>

    <section id="register" class="regist-section">
        <h2>Registrasi</h2>
        <form action="register.php" method="POST" class="form-regist">
            <input type="text" placeholder="Masukkan Username" name="username" required/>
            <input type="email" placeholder="Masukkan Email" name="email" required/>
            <input type="password" placeholder="Masukkan Password" name="password" required/>
            <button type="submit" name="regist">Daftar</button>
        </form>
        <p>kalau sudah anda bisa login kembali <a href="login.php" class="login-register"><u>disini</u></a></p>
    </section>

    <script src="script.js"></script>

    <?php include "layout/footer.html" ?>
</body>
</html>