<?php
    // array_assosiatif
        // definisinya sama seperti array numerik, kecuali
        // key-nya string yang kita buat sendiri
        // cara penulisanya : 
        /* 
            // index_assosiatif (dalam kasus ini string)=> isi_array
            nama_array = ["nama" => "kadek"];
        */
            // $mahasiswa = ["nama" => "kadek", "nim" => "12931203", "jurusan" => "Teknik Informatika"];
        // cara nampilin echo nama_array["index_assosiatif"]
            // echo $mahasiswa["nama"]
        
        // array assosiatif multidimensi 
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
        // cara nampilinnya echo [index_numeric_pd_array]["index_assosiatif"]
            // echo $mahasiswa[1]["nama"];
        // contoh array dalam array 
            //echo "</br>".$mahasiswa[1]["tugas"][1];
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
      <h1>Daftar Mahasiswa</h1>
      <?php foreach ($mahasiswa as $mhs):?>
      <ul>
          <!-- cara menambahkan gambar -->
          <li><img src="<?=$mhs["foto"];?>"></li>
          <li>Nama: <?=$mhs["nama"]?></li>
          <li>Nim: <?=$mhs["nim"] ?></li>
          <li>Jurusan <?=$mhs["jurusan"]?></li>
      </ul>
      <?php 
        /* 
        Note: pada looping array assosiatif tidak di butuhkannya 
        index karna foreach hanya membutuhkan index assosiatifnya maka akan
        otomatis dilooping
        
        */
      
      
      ?>
      <?php endforeach;?>
  </body>
  </html>
