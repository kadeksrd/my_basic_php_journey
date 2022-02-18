
<?php 

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
// require = untuk mengimport file php lain
$mahasiswa = query("SELECT * FROM mahasiswa");
$mpdf = new \Mpdf\Mpdf();
$html =
'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .loader{
            width: 70px;
            position: absolute;
            top: 90px;
            z-index: -1;
            margin-right: 30px;
            display: none;
        }
        @media print{
            .logout{
                display: none;
            }
        }
    </style>
</head>
<body>
    <li style="float:right; margin-top: 15px;"><a href="logout.php" class="logout">loguot</a></li>
    <h1>Daftar Mahasiswa</h1>
    <br>
    <div id="container">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>No</td>
                <td>Gambar</td>
                <td>Nim</td>
                <td>Nama</td>
                <td>Jurusan</td>
            </tr>
';
$i=1;
foreach($mahasiswa as $row){
  $html .= '<tr>
        <td>'. $i++.'</td>
        <td><img src="'.$row["gambar"].'"width="50" height="50"></td>
        <td>'.$row["nim"].'</td>
        <td>'.$row["nama"].'</td>
        <td>'.$row["jurusan"].'</td>
    </tr>';
};
$html .= '
        </table>
    </div>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar_mahasiswa.pdf',\Mpdf\Output\Destination::INLINE);?>
