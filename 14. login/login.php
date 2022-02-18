<?php 
require 'function.php';

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // mencari username
    $result = mysqli_query($db,"SELECT * FROM users WHERE username = '$username'");
    
    // cek username dengan 
    if(mysqli_num_rows($result) === 1){
        /* 
        msqli_num_rows : untuk mencari berapa baris yang ada pada mysqli_querynya 
        kalo ketemu hasilnya 1 kalo ga ktemu hasilnya 0
        */
        // cek Password
        $row = mysqli_fetch_assoc($result);
        // mysqli_fetch_assoc =  mengambil baris dari hasil array assosiatif dari password
        if( password_verify($password,$row["password"])){
            /*
            password_verify(password_yg_diinput,password_yang_disimpan_di_database)
            fungsinya untuk mencocokan antara password yang dinput sama yang tidak di input
            
            */
            header("location: index.php");
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
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>
</html>