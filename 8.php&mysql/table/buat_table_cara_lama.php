<?php 
// koneksi ke database
// pake mysqli_connect("nama_host","username","password","nama_database")
// contoh:
$db = mysqli_connect("localhost","root","","phpdasarku");

// ambil data dari tabel mahasiswa
    // cara penulisannya 
    // mysqli_query("$connect_database","action database")
    /*data tabel 
    pakai command mysql saat buka tabel yaitu select * from nama_database dan ditulis 
    seperti dibawah
*/
        $result = mysqli_query($db,"SELECT * FROM mahasiswa");
    /*note2:
    mysqli_query ga bisa deteksi mana benar dan salah maka solusi 
    yang dilakukan via var dump 
    -kalo var dump keluar hasil maka berhasil
    -kalo var dump keluarkan hasil false;
    */
    // contoh 
        // var_dump($result);

    // atau buat perintah eror
        if (! $result){
            echo mysqli_error($db);
        };
// ambil data (fetch)dari object result

// mysqli_fetch_row()
    // systemnya mengambil data dengan mengembalikan array numeric 
        // $mhs = mysqli_fetch_row($result);
        // var_dump($mhs[2]);
// mysql_fetch_assoc()
    // mengambil data dengan mengembalikan array assosiatif
        // $mhs= mysqli_fetch_assoc($result);
        // var_dump($mhs["jurusan"]);
// mysql_fetch_array()
    // mengambil data dengan mengembalikan array numeric dan array assosiatif
        // $mhs= mysqli_fetch_array($result);
        // var_dump($mhs[2],$mhs["nim"]);
    // kelebihannya : bisa tampilin dua tipe array 
    // kekurangannya : saat di tampilin semua array semuanya double 
// mysqli_fetch_object()
    // mengambil data dengan mengembalikan object
    // $mhs= mysqli_fetch_object($result);
    // var_dump($mhs->nama);

// cara tampilin semua data dengan fetc 
    // dengan cara looping 
    // while($mhs= mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // }

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
        <!-- buat table cara lama -->

        <?php $i=1
        // kenapa pake i biar id nya bertambah terus tidak mengikuti db
        ?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <?php 
            /*cara nampilin tablenya 
             tiap fecth per tabel di echo 
             contoh :
             echo row ["nama_table"]
                note: echo kalo php html bisa juga diartikan
                <?=>
            */
            
            ?>
            <td><?=$i?></td>
            <td><a href="">ubah</a>|<a href="">hapus</a></td>
            <td><img src="<?=$row["gambar"]?>" alt="" width="50" height="50"></td>
            <td><?=$row["nim"]?></td>
            <td><?=$row["nama"]?></td>
            <td><?=$row["jurusan"]?></td>
        </tr>
        <?php $i++?>
        <?php endwhile;?>
    </table>
</body>
</html>