<?php 
require 'function.php';

// query data mahasiswa berdasarkan id
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// cek apakah submit sudah ditekan 

    if(isset($_POST["submit"])){
        if (update($_POST) > 0) {
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
    <title>Ubah data mahasiswa</title>
    <style>
        li{
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>
    <br>
    <form  method="post" enctype="multipart/form-data">
       <ul>
           <!-- id -->
            <input type="hidden" name="id" value="<?=$mhs["id"]?>">
        <li> <!-- nim -->
            <label for="nim">Nim: </label>
            <input type="text" name="nim" id="nim" required value="<?=$mhs["nim"];?>">
        </li>
        <li>
            <!-- nama -->
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" value="<?=$mhs["nama"]?>"required>
        </li>
        <li>
            <!-- jurusan -->
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" required  value="<?=$mhs["jurusan"]?>">
        </li>
        <li>
            <!-- gambar-->
            <label for="gambar">Gambar: </label>
            <br>
            <img src="<?=$mhs["gambar"];?>" width="35px" height="35px" alt=""><br>
            <input type="file" name="gambar" id="gambar" required >
        </li>
        <br>
        <li>
            <button type="submit" name="submit">Ubah Data</button>
        </li>
        <a href="index.php"><- back</a>
       </ul>
    </form>
</body>
</html>

<?php 
/*
        Alur Update 

    menampilkan id url get ("baca rule url di get.php di pertemuan 8") setelah itu buat aksi ke file baru 
    penulisan syntax : 
    <a href="update.php?id=<?=$row["id"]?>">ubah</a>
        -di file baru 
    0. buat require ke function : require 'function.php'    
    1. kita tangkap id dengan cara 
        $id = $_GET["id"];
        $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    
    2. setelah itu kita samakan table add dengan update karna kurang lebih inputannya sama 
    3. setelah di copy, silahkan ubah dan tambahkan
        3.1 tambahkan value pada setiap input 
            seperti ini : 
             value="<?=$mhs["nama_data"]?>"
        3.2 ganti submit jadi ubah data atau update 
            seperti ini :
            <button type="submit" name="submit">Ubah Data</button>

        3.3 setelah itu mari kita buat file function 

    -pd file function 
     1. kita buat function update (sama seperti function add namun ada beberapa perubahan )

     function add
            
     function add($data){
            global $db;
            // agar tidak bisa memasuki script pada saat input gunakan htmlspecialchars
            $nim = htmlspecialchars($data["nim"]);
            $nama = htmlspecialchars($data["nama"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $gambar =htmlspecialchars($data["gambar"]);

            // querynya
            $query = "INSERT INTO mahasiswa VALUES 
            (null,'$nama','$nim','$jurusan','$gambar')";
            mysqli_query($db,$query);

            return mysqli_affected_rows($db);
            };
    
    2. perubahan pd function: function update($parameter_baru)kita kasih $mhs aja jadi : function update($mhs)
    3. penambahan pd data : tambahkan data id dengan cara $id = $mhs["id"];
    4. perubahan pd query : menjadi query update seperti ini : 
            $query = "UPDATE mahasiswa SET
            nim='$nim',
            nama='$nama',
            jurusan='$jurusan',
            gambar ='$gambar' 
            WHERE id= '$id'"; 

            artinya kita mengupdate kan semua data melalui id 
    5. setelah itu kembali pada file update

    - file update kembali 
    1. masukan isset submit dan panggil function seperti di add namun hanya ganti di menjadi update
            seperti ini : 
            if(isset($_POST["submit"])){
    if (update($_POST) > 0) {
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
    2. kemudian karna kita mengupdate data melalui id maka kita butuh mendeklarasikan id ke input namun karna id merupakan 
        primary key akan berbahaya kita tampilkan namun cukup kita hidden kan seperti ini :
        <input type="hidden" name="id" value="<?=$mhs["id"]?>">

    data sudah bisa di update

*/

?>