<?php 
    // cara agar kita tidak bisa merubah url file ini karna datanya sudah ada di _$GET
    // menggunakan isset
    /* cara kerjanya gini agar tidak terjadinya pencurian 
    data atau percobaan dari hacker maka menggunakan isset caranya begini 
    if(!isset($_GET["nama_array"])){
        header("location:latihan.php")
    artina : jika bukan dari array "nama_array" maka pindahkan ke header utama (ke lock istilahnya)
    jadi otomatis dia akan ke lock di header utama saat kita kotak katik urlnya 
    */
    // if(!isset($_GET["nama"]) 
    // ||!isset($_GET["nim"]) 
    // || !isset($_GET["jurusan"])){ 
    //     // redirect
    //     header("Location: get&post.php");
    //     exit;//exit digunakan agar tidak mengeksekusi script dibawah
    // }

    if(!isset($_GET["nama"])){
        echo "<script type='text/javascript'>
        alert('Maaf Ada Tidak Dapat Mengases')
        window.location.href= 'latihan_get1.php'
        </script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get&post part2</title>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"];?></li>
        <li><?=$_GET["nim"]?></li>
        <li><?=$_GET["jurusan"] ?></li>
    </ul>
    <?php 
    // cara nampilinnya 
    /*
    menggunakan supersglobal scope $_GET
    <?=$_GET["nama_array"]> 
    */
    
    
    ?>
    <a href="latihan_get1.php">Kembali Ke Halaman Utama</a>
</body>
</html>