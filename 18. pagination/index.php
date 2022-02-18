<?php 
session_start();
// cek apakah user sudah login pada session
if(!isset($_SESSION["login"])){
    header("location:login.php");
}

require 'function.php';
// require = untuk mengimport file php lain


// pagination

// limit pada php 
// cara limit adalah query ("SELECT * FROM mahasiswa LIMIT 1,2")
/*
1: artinya dari index 1 
2: artinya 2 data saja yg ditampilkan sisanya dilimit
*/

// konfigurasi pagination

// cara lama
// $jumlahDataperHalaman = 3;
// $result = mysqli_query($db,"SELECT * FROM mahasiswa");//keluarkan semua database
// $jumlahdata = mysqli_num_rows($result);//mysqli_num_rows : menghitung rows
// var_dump($jumlahdata);

// cara cepat 
$jumlahDataperHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));//count : untuk menghitung jumlah array
$jumlahHalaman = ceil($jumlahData/$jumlahDataperHalaman);//round: membulatkan terdekat || floor : pembulatan kebawah || ceil : pembulatan keatas
$page = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// halaman 2, awalIndexdata = 2;
// halaman 3, awalIndexdata = 3;
$data_Halaman = ($jumlahDataperHalaman * $page) - $jumlahDataperHalaman;




$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $data_Halaman,$jumlahDataperHalaman");
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
    <!-- navigasi -->
    <!-- untuk menampilkan < agar tab bisa berpindah ke sebelumnya -->
    <a href="?halaman=<?=$page-1;?>"><</a>


    <?php for($i = 1; $i<=$jumlahHalaman; $i++):?>
        <?php if($i == $page):?>
        <a href="?halaman=<?=$i;?>" style="font-weight: bold; color: red;"><?= $i?></a>
        <?php else:?>
        <a href="?halaman=<?=$i;?>"><?= $i?></a>
        <?php endif;?>        
    <?php endfor;?>

    <!-- untuk menampilkan < agar tab bisa berpindah ke setelahnya -->
    <a href="?halaman=<?=$page+1;?>">></a>
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