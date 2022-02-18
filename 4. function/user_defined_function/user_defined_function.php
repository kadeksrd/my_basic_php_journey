<?php 
function salam($waktu,$nama){
   return "selamat $waktu, $nama!";
    // if($waktu>=strtotime("00.00")&&$waktu<=strtotime("10.00")){
    //     $waktu = "pagi";
    //     return "selamat $waktu, $nama!";
    // }
    // else if($waktu>=strtotime("16.00") && $waktu<strtotime("18.00")){
    //     $waktu = "sore";
    //     return "selamat $waktu, $nama!";
    // }
    // else if($waktu>=strtotime("18.00")&& $waktu<=strtotime("23.00")){
    //     $waktu="malam";
    //     return "selamat $waktu, $nama!";
    // }

};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <!--  -->
    <h1><?php 
    echo salam("pagi","surya");
        // <?=  adalah php echo
     ?> </h1>
</body>
</html>