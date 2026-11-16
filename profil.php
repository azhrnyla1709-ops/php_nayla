<?php

$nama = "Azzahra Nayla Putri";
$kelas = "XI RPL";
$hobi = "Membuat web & Berenang";
$warna_latar = "#4e1126";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: arial;
        }

        .kartu {
            background-color: <?php echo $warna_latar; ?>;
            color: white;
            width="300px";
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <h2> <?php echo $nama; ?></h2>
        <p>Kelas: <?php echo $kelas ; ?></p>
        <hr>
        <p>Hobi: <?php echo $hobi ; ?></p>

    </div>
</body>
</html>