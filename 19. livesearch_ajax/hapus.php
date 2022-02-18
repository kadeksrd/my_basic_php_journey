<?php 
session_start();
// cek apakah user sudah login pada session
if(!isset($_SESSION["login"])){
    header("location : login.php");
}
require 'function.php';
$id = $_GET["id"];
var_dump($id);


if(delete($id)>0){
    echo "
    <script>
        alert('data berhasil di hapus !');
        document.location.href='index.php';
    </script>
    ";
}
else{
    echo "
<script>
    alert('data gagal di hapus !');
</script>";
}
?>