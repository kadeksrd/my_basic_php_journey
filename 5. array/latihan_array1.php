<?php 
// pengulangan pada array 
// for /foreach 
$angka = [3,2,15,12,13,4,5,6];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan2 </title>
     <style>
         .kotak{
             width : 50px;
             height : 50px;
             background-color: salmon;
             text-align: center;
             line-height: 50px;
             margin: 3px;
             float: left;
            
         }
         .clear{clear:both;}
     </style>
 </head>
 <body>
     <!-- looping biasa -->
         <?php for($i=0; $i<count($angka); $i++):
            /* count($variabel_array): 
            untuk mengukur array sesuai dengan 
            banyaknya/ dikitnya isi array , tanpa perlu mengukur manual
            */
            ?>
            <div class="kotak"><?php  echo $angka[$i] ?></div>
        <?php endfor?>
        <!-- looping foreach -->
        <div class="clear">
            <?php 
            // penggunaan foreach
            // foreach($variabel_array as variabel_baru)
            /*
                variabel_array : variabel arraynya 
                yang berbentuk jamak (banyak)

                variabel_baru : variabel baru yang berbentuk singular namun
                membungkus variabel_array 
            
            */
            
            foreach($angka as $a):?>
                <div class="kotak">
                    <?=$a; ?>
                </div>
            <?php endforeach?>

            <div class="clear">
            <?php foreach($angka as $a):?>
                <div class="kotak">
                    <?=$a; ?>
                </div>
            <?php endforeach?>
        </div>
 </body>
 </html>