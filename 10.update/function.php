<?php 
$db = mysqli_connect("localhost","root","","phpdasarku");

// $result = mysqli_query($db,"SELECT * FROM mahasiswa");

function query($query){
    global $db;
    // global = untuk mengubah scope lokal jadi global;
    $result = mysqli_query($db,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
/*
alur fungsi diatas :
buat function query(parameter query) 
yang mana $result = mengambil data query dari ($variabel_db,$tampilkan_parameter_query)
setelah itu buat parameter rows = [untuk nampung data]
yang mana 
row = tampilkan secara urut ($resuslt){
    yang mana isi dari rows[] = rowbaru
}
kembalikan return
*/

// insert data function

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
// delete function
function delete($id){
    global $db;
    mysqli_query($db,"DELETE FROM mahasiswa WHERE id =$id");
    return mysqli_affected_rows($db);
}

// update
function update($mhs){
    global $db;
    // agar tidak bisa memasuki script pada saat input gunakan htmlspecialchars
    $id = $mhs["id"];
    $nim = htmlspecialchars($mhs["nim"]);
    $nama = htmlspecialchars($mhs["nama"]);
    $jurusan = htmlspecialchars($mhs["jurusan"]);
    $gambar =htmlspecialchars($mhs["gambar"]);
    // query
    $query = "UPDATE mahasiswa SET
    nim='$nim',
    nama='$nama',
    jurusan='$jurusan',
    gambar ='$gambar' 
    WHERE id= '$id'";

    mysqli_query($db,$query);

    // return the wrong 
    return mysqli_affected_rows($db);
}


?>