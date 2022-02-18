<?php

// single line comment
/* double line comment 

*/

// standar Output
    // untuk mencetak sesuatu di luar (diweb)
    // echo, print (untuk mencetak suatu varaiabel)

    // print_r (untuk mencetak array)

    // var_dump()/ untuk melihat jenis tipe data dan ukurannya

    // contoh 
    // echo "Hello 'Bayam'";
    // print "Hello Dev";
    // var_dump("test");

// variabel dan tipe data
    // tidak boleh diawali dengan angka, tapi boleh mengandung angka 
    // $nama_variabel = nilainya
  
    $nama = "Bayam";
    "\n";
    // konsep interporasi
    // ketika menaruh nilai / variabel dalam "" maka nilai itu bisa dieksekusi
    // contoh
    echo "halo nama saya $nama <br />";
    echo 'halo nama saya $nama <br />';
    // maka hasilnya beda

// operator
    // aritmatika 
    // * - + / %  
    // echo 1+1;
    // echo "<br/>";
    // $a = 2;
    // $b = 3;

    // echo $a * $b ;

// penggabungan string / concatenation / concat
    // .
    // $nama_depan = "Bayam";
    // $nama_belakang = "Dev";
    // echo $nama_depan . " ". $nama_belakang . "<br/>";

// assignment
    // operator penugasan
    // =,+=, -=, *=, /=, %=, .=
    // $x = 1;
    // $x -= 5;// x = x-5
    // $x *= 5;
    // echo $x;
    // echo "<br/>";

    // $nama_depan = "bayam";
    // $nama_depan .= "";
    // $nama_depan .= "kepo";
    // echo $nama_depan;

// perbandingan 
    // <,>,<=,>=,==,!=
    // var_dump(5!=1);

// identitas
    // perbandingan satu tipe data
    // ===, !==
    // var_dump(1 === "1");

// logika 
    // &&, ||, !
    // $x = 50;
    // var_dump($x == 50 ||$x % 2 == 25);
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
     <!-- php didalam html -->
    <h1>Hallo <?php echo $nama?></h1>
    <p><?php echo "selamat datang bayam"?></p> 
     <!-- <?php 
        // html didalam php
    //    echo <h1>Selamat datang Dev</h1>
    ?> -->
</body>
</html>