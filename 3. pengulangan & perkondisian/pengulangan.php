<?php 
// control flow
// pengulangan
    // for
        // for($i = 0; $i<5; $i++){
        //     echo "hallo bayam <br/>";
        // }
    // while
        // $i = $i;
        // while($i <5){
        //     echo "Hello world <br/>";
        //     $i++;
        // }
    // do while
        // $i=0;    
        // do{
        //    echo "hallo bayam <br/>";
        //     $i++;
        // }
        // while ($i < 5);
    // foreach : pengulangan khusus array 
?>

<!-- latihan -->
<!-- buat tabel -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris{
            background-color: orangered;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- cara simple -->
        <!-- <?php 
            // for($i=1; $i<2; $i++){
            //     echo "<tr>";
            //     for($j=0; $j<=5; $j++){
            //         echo "<td>$i,$j</td>";
            //     }
            //     echo "</tr>";
            // }
        ?>
         -->
         <!-- cara sulit  -->
        <?php for($i=1; $i<6; $i++) : ?>
            <tr class="warna-baris">
                <?php if ($i % 2 == 1) :?>
                    <tr class="warna-baris">
                <?php else: ?>
                    <tr>
                  <?php endif?>
                <?php for($j=0; $j<=5; $j++) :?>
                     <td><?php echo "$i,$j"; ?></td>
                    <?php endfor?>

            </tr>
            <!-- templating untuk kurung kuawal {} yaitu 
            untuk buka ":" 
            untuk tutup "endnama_flow (endif, endfor, endwhile, endforeach)" 
        
        -->
        <?php endfor?>

    </table>
</body>
</html>
