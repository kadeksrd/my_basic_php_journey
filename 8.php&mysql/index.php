<?php 
require 'function.php';
// require = untuk mengimport file php lain
$mahasiswa = query("SELECT * FROM mahasiswa");
/*
panggil function 
variabel mahasiswa = panggil function query(masukan parameter yang mana 
parameternya adalah mengambil data mahasiswa dari database);
*/
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
    <h1>Daftar Karyawan</h1>
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
            <td><a href="">ubah</a>|<a href="">hapus</a></td>
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