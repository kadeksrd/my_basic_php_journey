<?php 
    // data seorang mahasiswa ada nama , nim, jurusan, emai 
    $mahasiswa = [
        ["kadek surya", 19912301, "Teknik Informatika"],
        ["puput", 19912301, "Kedokteran"],["kepo", 19912301, "Kedokteran"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- cara looping -->
    <!-- <ul>
        <?php foreach($mahasiswa as $mahasiswa_a): ?>
        <li><?= $mahasiswa_a;?></li>
        <?php endforeach; ?>
    </ul> -->
    <br/>
    <!-- cara manual -->
    <!-- <ul>
        <li><?php echo $mahasiswa[0]?></li>
        <li><?php echo $mahasiswa[1]?></li>
        <li><?php echo $mahasiswa[2]?></li>
    </ul> -->
    <!-- cara looping array multidimensi -->
    <!-- data mahasiswa -->
    <?php 
    /* cara kerjannya :
        foreach meloopingkan array -> terhadap li 
        looping berapa ? -> buatkanlah li sesuai dengan jumlah index 
        dari pada array itu sendiri 
    */
    
    foreach($mahasiswa as $mhs):?>
    <ul>
    <li>Nama: <?php echo $mhs[0]?></li>
    <li>NIM: <?php echo $mhs[1]?></li>
    <li>Jurusan: <?php echo $mhs[2]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>