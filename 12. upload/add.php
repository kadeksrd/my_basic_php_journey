<?php 
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum 
if(isset($_POST["submit"])){
    // var_dump($_POST);
    // var_dump($_FILES);
    
    // die;
    /*
    apabila var_dump($_FILES) dijalankan maka akan keluar tipe data baru 
    karean di form telah kita tambahkan enctype="multipart/form-data"


    array(1) {
  ["gambar"]=>
  array(5) {
    ["name"]=>
    string(9) "poto1.jpg"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(45) "C:\Users\kadek\AppData\Local\Temp\phpF901.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(12721)
  }
  penjelasan 
  gambar : array utama
  name,type,string,tmp_name,error,size : array kedua 
  name: nama file foto 
  type: tipe data foto
  tmp_name: tempat penyimpanan sementara  dan ketika di upload akan di pindahkan ke tempat yang kita mau
  error: pesan menghasilkan agka (0)=tidak eror (4) file ga ke upload
  size : ukurannya 
    */

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
    <form action="add.php" method="post" enctype="multipart/form-data">
       <!-- 
        enctype : multipart/form-data -> untuk memisahkan upload file agar tidak di kelola oleh $_POST


        -->
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
            <input type="file" name="gambar" id="gambar"><!-- type  "file " : untuk upload -->
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
       </ul>
    </form>
</body>
</html>

