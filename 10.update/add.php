<?php 
require 'function.php';
// masukan database
$db = mysqli_connect("localhost","root","","phpdasarku");

// cek apakah tombol submit sudah ditekan atau belum 
if(isset($_POST["submit"])){
     
    // insert data dari query versi simple
    // ambil data dari tiap elemen dari form
    // $nim = $_POST["nim"];
    // $nama = $_POST["nama"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    //query
    // $query = "INSERT INTO mahasiswa VALUES 
    // (null,'$nama','$nim','$jurusan','$gambar')";
    // mysqli_query($db,$query);
    // // cek apakah data berhasil di tambahkan atau tidak
    // // menggunakan msqli_affected_rows
    // // apabila 1 maka data berhasil masuk dan apabila -1 data gaberhasil masuk
    // if (mysqli_affected_rows($db) > 0) {
    //     echo "Berhasil";
    // }
    // else{
    //     echo "gagal";
    //     echo "<br/>";
    //     echo mysqli_error($db);
    // }

    // versi modular
    if (add($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil di tambahkan !');
            document.location.href='index.php';
        </script>
        ";
    }
    else{
        echo "
    <script>
        alert('data gagal di tambahkan !');
    </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
    <style>
        li{
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <br>
    <form action="add.php" method="post">
       <ul>
        <li> <!-- nim -->
            <label for="nim">Nim: </label>
            <input type="text" name="nim" id="nim" required>
        </li>
        <li>
            <!-- nama -->
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <!-- jurusan -->
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
            <!-- gambar-->
            <label for="gambar">Gambar: </label>
            <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
       </ul>
    </form>
</body>
</html>

