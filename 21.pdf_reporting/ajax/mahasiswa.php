<?php 
require '../function.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM mahasiswa WHERE
nama LIKE '%$keyword%'OR
nim LIKE '%$keyword%'OR
jurusan LIKE '%$keyword%'"; 
$mahasiswa = query($query);
?>

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