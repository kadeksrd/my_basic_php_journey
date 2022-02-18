<?php 

session_start();
$_SESSION["nama"] = "kadek";
echo $_SESSION["nama"];

?>

<?php 
/*
session 

suatu mekanisme pada php untuk bisa mengakses lebih dari satu halaman 
tetapi persetiap sesi/session 

cara penulisan 

1. penulisan dihalaman utama
-diawali sesion star()
-lalu ditambahkan $_SESSION["nama_variabel"]= isi variabel;
-untuk ditampilkan bisa di tambahkan echo $_SESSION["nama_variabel"];

2. di halaman kedua


kelebihan session
-bisa akses script antar halaman dengan mudah cukup $_SESSION["samakan_variabelnya"];
-cocok untuk digunakan login karna session hanya bisa diakes per sesi 

kekurangan
-hanya bisa di akses persesi
-setelah itu eror, biar ada lagi kita buka halaman utama baru ke halaman sekunder

*/



?>