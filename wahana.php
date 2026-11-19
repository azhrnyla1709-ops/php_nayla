<?php

echo "<h2>Pengecekan Wahana Roller Coaster</h2>";

$umur = 15;
$tinngi_cm = 150;

if ($umur >= 12 && $tinngi_cm >= 145) {
    echo "<h3 style='color: green;'>Selamat, Anda Boleh Naik Wahana!</h3>";
} else {
    echo "<h3 style='color: red'>Maas, Syarat Tidak Terpenuhi.</h3>";
}

?>