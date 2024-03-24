<?php
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
    // Soal 26
    // Bagaimana output dari kode soal di atas kemudian jelaskan! 
    // ketika menjalankan kode di atas, akan mencetak hasil dari penambahan variabel $x dan $y, yaitu 100, karena $x = 75 dan $y = 2
?>