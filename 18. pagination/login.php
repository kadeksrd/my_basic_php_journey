<?php 
session_start();
require 'function.php';
// cek cookie 
if(isset($_COOKIE['login_auu']) && isset($_COOKIE['key'])){
 $id = $_COOKIE['login_auu'];
 $key= $_COOKIE['key'];


//  ambil username berdasarkan id 
$result = mysqli_query($db, "SELECT username FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

// cek cookie dan username (acak username baru)
if($key === hash('sha256',$row['username']))
            {$_SESSION['login']=true;
}



}


if( isset($_SESSION["login"]) ){
   echo "
   <script>
        document.location.href = 'index.php';
   </script>
   ";
   exit;
}


if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // mencari username
    $result = mysqli_query($db,"SELECT   * FROM users WHERE username = '$username'");
    
    // cek username dengan 
    // kalo betul == 1
    if(mysqli_num_rows($result) === 1){
        /* 
        msqli_num_rows : untuk mencari berapa baris yang ada pada mysqli_querynya 
        kalo ketemu hasilnya 1 kalo ga ktemu hasilnya 0
        */
        // cek Password
        $row = mysqli_fetch_assoc($result);
        // mysqli_fetch_assoc =  mengambil baris dari hasil array assosiatif dari password
        // bandingkan password yang diinput dengan password yang ada di database
        if( password_verify($password,$row["password"])){
            /*
            password_verify(password_yg_diinput,password_yang_disimpan_di_database)
            fungsinya untuk mencocokan antara password yang dinput sama yang tidak di input
            
            */
            
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST['remember'])){
                // ngambil user id 

                // buat cookie tersembunyi
                setcookie('login_auu',$row['id'],time()+60);
                    // pakai hash 
                setcookie('key',hash('sha256',$row['username']));
            }


            header("location:index.php");
          exit;
        }
       $error = true; 
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label{
            display: block;
            margin-top: 5px;
        }
        button{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php 
        if (isset($error)):
    ?>
    <p style="color:red;font-style:italic;">
            username/ password salah

    </p>


    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" placeholder="Username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" placeholder="Password">
            </li>
            <li>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
    <br>
    <p>Belom punya akun? register kuy <a href="registrasi.php"><b>Disini</b></a> </p>
</body>
</html>