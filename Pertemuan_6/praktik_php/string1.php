<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

// Soal 13
/* Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu */
/* maka akan menghitung panjang karakter, panjang kata, menulisankan teks lorem ipsum 
dengan huruf besar, dan menuliskan teks lorem ipsum dengan huruf kecil */
?>