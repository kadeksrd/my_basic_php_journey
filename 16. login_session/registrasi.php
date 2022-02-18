<?php 

require 'function.php';


if(isset($_POST["register"])){

    if(registrasi($_POST)>0){
        echo "
        <script>
            alert('Registrasi Berhasil!');
            document.location.href='login.php';
        </script>
        
        ";
    }
    else{
        echo mysqli_error($db);

    }
}














?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body> 
    <h1>Halaman Registrasi</h1>
    <form action="#" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password:  </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Sign Up</button>
            </li>
        </ul>
    </form>

    <!-- 
        alur pembuatan registrasi di registrasi php 
        1. buat form html dengan method pos,
        berikan username dan password name yang seusai dan dibuat kan label untuk konfirmasi password
        2. di script cukup panggil fungsi ketika kita tekan submit , jika benar tulis benar dan jika salah tulis salah 
        3. selanjutnya di teruskan di function


     -->
</body>
</html>