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
    
    // upload gambar
    $gambar = upload();
    if($gambar === false) {
        return false;
    }
    // querynya
    $query = "INSERT INTO mahasiswa VALUES 
    (null,'$nama','$nim','$jurusan','$gambar')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
};

// upload data
function upload(){
    $fileName= $_FILES['gambar']['name'];
    $fileSize= $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar
    if( $error === 4){
        echo "<script>
                alert('pilih gambar terlebih dahulu ');
            </script>";
        return false;
    }

    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    //$ekstensigambar = explode(deliminter, string);
    /*
    exploade : sebuah fungsi untuk memecah string menjadi array    
    deliminter : posisi untuk memecahkan stringnya
    string: string yang ingin di pecah 
    */
    $ekstensiGambar = explode('.',$fileName);
    // artinya : pisahkan format file .  menjadi array
    // untuk mengambil akhiran di filenya doang (formatnya) dan membuat formatnya yg tdnya besar bisa dipaksa kecil
    // end($nama_file) : untuk mengambil akhirnya
    // strtolower: untuk menconver format tulisan besar menjadi kecil
    $ekstensiGambar = strtolower(end($ekstensiGambar)); 


    // pastikan yang di upload gambar sesuai dengan format yang valid
        // gunakan fungsi in_array(jarum, jerami nya)/(file yang dipilih , file yang validnya)
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo 
            "<script>
                alert('file yang dikirimkan bukan gambar');
            </script>";
        return false;
    

    // cek jika ukurannya terlalu besar
        if($fileSize>1000000){
            echo 
                "<script>
                    alert('Ukuran Gambar Terlalu Besar Max> 1Mb');
                </script>";
            return false;
        }
    }
    // lolos pengecekan, gambar siap di upload
        // terjadi persamaan nama,maka generate nama baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($file_tmp, 'img/' . $namaFileBaru);
        return 'img/'. $namaFileBaru;
        // di return img/ agar bisa ke baca


        /*
        alur nya gini 
        ketika kita uploade file dan di submit maka akan ada proses spt berikut :
        1. $_files: file akan di baca dari nama dan size 
        2. setelah itu file di pindahkan ke tempopary file 
        3. if(error == 4):kemudian file kita buat aturan jika file dengan error 4 (yg artinya file tidak ke upload)
        maka nyatakan false otomatis upload gagal
        4. $ekstensigambarvalid: kemudian buat ekstensi gambarnya untuk menentukan file nya mau jenis apa
        5. $ekstensigambar :setelah itu kita pecah jenis file menjadi array dengan explode
        6. if (inarray)setelah ekstensi selesai maka kita tentukan aturannya
        7. kita buat aturan pertama dengan memasukan array ekstension td apabila sesuai filenya maka lanjut jika engga maka gagalkan
        8. if(size>)setelah itu kita tentukan sizenya sama seperti diatas aturannya
        9. move_uploaded_file: kemudian kita pindahkan dari tmp ke local file (jangan lupa kembalikan seusai file yg ditentukan)
        10. $namafilebaru = uniqid();kita atur uniqid nya agar nama file tidak sama
        */
}
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
    $gambar = upload();
    if($gambar === false) {
        return false;
    }
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

// search
function search($keyword){
    $query = "SELECT * FROM mahasiswa WHERE
                -- cara mencari sesuai kata 
                -- nama = '$keyword'OR
                -- nim = '$keyword'OR
                -- jurusan = '$keyword'

                -- cara mencari untuk kata2 yg mendekati
                nama LIKE '%$keyword%'OR
                nim LIKE '%$keyword%'OR
                jurusan LIKE '%$keyword%'

                -- cara penggunaannya adalah
                /*
                nama_data LIKE '%keywordnya%' OR
                ket : 
                LIKE : untuk memasukan pencarian yang mendekati
                % : untuk memastikan nama yang mendekati itu ada di depan atau di belakang
                OR : untuk menambahkan pencarian yang lain
                = : untuk memasukan pencarian yang sesuai
                 */
    
    ";
    // return query diatas terhadap query lokal
    return query($query);
    // query = query diatas
    // $query = query function ini (local)
}

// upload



?>