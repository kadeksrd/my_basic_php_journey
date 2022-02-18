<?php 
// array
    // variabel yang dapat memiliki banyak nilai 
    // elemen pada array boleh memiliki tipe data yang berbeda 
// membuat array
    // cara lama
    $hari = array("senin","selasa","rabu");
    // cara baru 
    $bulan = ["januari","febuari","maret"];
    $arr1 = [123,"tulisan", false];

// menampilkan array
    // versi debuging
        // var_dump
        var_dump($arr1);
        echo "<br/>";
        // print_r 
        print_r($bulan);
        echo "<br/>";
        // menampilkan 1 elemen pada array 
        echo $arr1[1];
        echo "<br/>";
        echo $bulan[1];
        // menambahkan elemen baru pada array
        var_dump($hari);
        $hari[] = "kamis";//menambahkan kamis di belakang array
        $hari[] = "jum'at"; 
        echo "<br/>";
        var_dump($hari);
?>