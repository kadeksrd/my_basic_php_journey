<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Selamat Datang <?=$_POST["nama"]?>!</h1>
    <?php 
    
    /*
        arti dari : 
        $_POST["nama"] || $_GET["nama"]
        post/get mengambil key dari name = nama pada form
    */
    ?>
</body>
</html>