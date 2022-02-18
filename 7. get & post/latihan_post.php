<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <?php if(isset($_POST["submit"])):?>
    <h1>
        Selamat Datang <?= $_POST["nama"]?>!
    </h1>
    <?php endif;?>
   
    <form method="post"><?php // kenapa pake post karena agar methodnya ga berubah get karena defaultnya get?>
        Masukan Nama: 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">submit!</button>
    </form>
    <!-- <form action="latihan_post2.php" method="post">
        Masukan Nama: 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">submit!</button>
    </form> -->
    <?php
    /*
        action: untuk lakukan aksi ke file/script lain
        method : metode yang dibutuhkan get/post
        type: tipe inputnya
        name: key nya yang akan di gunakan di method di file lain


        perbedaan get sama post
        fungsinya sama sama2 mengambil data dari 
        get

        -get terbuka di url 
        -get bisa di modifkasi dari url 

        post
        -post gak terbuka di url sehingga data tidak terbaca di url

    */
    
    
    ?>
</body>
</html>

