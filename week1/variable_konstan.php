<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// soal 1 hitung luas lingkaran dengan jari2
//soal 2 hitung kelilingnya

// definisikan nilai jari2
$jari = 8;

// definisikan nilai luas
$luas = PHI * $jari * $jari;

// definisikan nilai keliling
$keliling = 2 * PHI * $jari;

echo 'luas lingkaran dengan luas jari jari' .$jari. '=' .$luas;
echo '<br> kelilingnya : ' .$keliling;
?>

