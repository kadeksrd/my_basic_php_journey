<?php 
session_start();
// cek apakah user sudah login pada session
if(!isset($_SESSION["login"])){
    header("location : login.php");
}

require 'function.php';
// require = untuk mengimport file php lain
$mahasiswa = query("SELECT * FROM mahasiswa");
/*
CARA MENGURUTKAN DATA MAHASISWA 
dengan menambahkan ORDER BY id (gunakan id biar mudah) lalu tambahkan DESC/ ASC tergantung urutan
berdasarkan id terbesar : SELECT * FROM mahasiswa ORDER BY id DESC
berdasarkan id terkecil : SELECT * FROM mahasiswa ORDER BY id ASC / ga perlu ditambahkan juga udh otomatis
*/

// tombol di tekan
if (isset($_POST["search"])) :
    //  timpa data mahasiswa diatas
    $mahasiswa = search($_POST["keyword"]);
    echo ' <a style="margin-top : 1000px;" href="index.php"><-back</a>';
        endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li style="float:right; margin-top: 15px;"><a href="logout.php">loguot</a></li>
    <h1>Daftar Mahasiswa</h1>
    <!-- add data -->
    <a href="add.php">
        Tambah data mahasiswa
    </a>
    <br><br>
    <form  method="post">
        <input type="text" name="keyword" size="35" autofocus placeholder="Enter Keyword" autocomplete="off">
        <!--  
            sizing lebar : pake size
            untuk auto target input : autofocus
            autocomplete "off " : untuk mematikan suggestion search
        -->
        <button type="submit" name="search">Search</button>
    </form>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>No</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Jurusan</td>
        </tr>
        <?php $i=1?>
        <?php 
        /*setelah itu lakukan looping terhadap table dengan foreach yang mana $mahasiswa variabel awal $ row variabel keynya */
        foreach($mahasiswa as $row):?>
        <tr>
            <td><?=$i?></td>
            <td><a href="update.php?id=<?=$row["id"]?>">ubah</a>|<a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('yakin?');//untuk membuat alert confirm">hapus</a></td>
            <td><img src="<?=$row["gambar"]?>" alt="" width="50" height="50"></td>
            <td><?=$row["nim"]?></td>
            <td><?=$row["nama"]?></td>
            <td><?=$row["jurusan"]?></td>
        </tr>
        <?php $i++?>
        <?php endforeach; ?>
    </table>
</body>
</html>