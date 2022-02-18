<?php 
    $mahasiswa = [
        [
        "nama" => "kadek", 
        "nim" => "12931203", 
        "jurusan" => "Teknik Informatika",
        "foto" => "img/poto1.jpg",
    ], 
        [
        "nama" => "puput", 
        "nim" => "12931203", 
        "jurusan" => "kedokteran", 
        "foto" =>"img/poto2.png",
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <ul>
        <?php foreach($mahasiswa as $mhs):?>
            <li>
            <a href="latihan_get2.php?
            nama=<?=$mhs["nama"];?>
            &nim=<?=$mhs["nim"];?>
            &jurusan=<?=$mhs["jurusan"]?>">
            Nama: <?=$mhs['nama']?>
        </a>
        </li>
        <?php endforeach;?>
    </ul>
    <?php 
    // cara buat url sesuai dengan data yang di tampilkan 
    /*      Versi post utama
            buat href dengan _GET$ di url browsernya
            tapi isinya menggunakan foreach array assosiatif
            jadinya seperti ini
        ex: <a href="http://test.php?nama_key=<?=key_foreach["nama_array"]?
        &nama_key_tambahan=key_foreach2["nama_array"]?> dst..

        contoh diatas 
        &">
    
    
    */
    
    
    ?>
</body>
</html>