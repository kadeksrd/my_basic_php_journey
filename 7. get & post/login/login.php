<?php 
// cek apakah tombol submit sudah tekan atau belum 
    // cek username & password apakah sudah benar?
    if(isset($_POST["submit"])){
    // jika benar, redirect ke halaman admin
        if($_POST["username"] == "admin" && $_POST["password"] == "123"){
            header("Location: admin.php");
            exit;
        }
        else{
            // jika salah , tampilkan pesan kesalahan
            $eror = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <form method="post">
        <!-- kenapa ga pake action agar user dan passwordnya bisa ke lock sesuai script diatas  -->
        <ul>
                <!-- username -->
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
                <!-- password -->
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
            <button type="submit" name="submit">login</button>
            </li>
        </ul>
        <?php if(isset($eror)):
            // buat menampilkan eror
            ?>
            <p style="color:red; font-style:italic;">username / password salah!</p>
        <?php endif;?>
    </form>
</body>
</html>
