<?php
// Langkah 1
// function tampilkanHaloDunia(){
//     echo "Halo dunia!<br>";

//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// Langkah 3
// for ($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i}<br>";
// }

// Langkah 4
// function tampilkanAngka (int $jumlah, int $indeks = 1){
//     echo "Perulangan ke-{$indeks}<br>";

//     //panggil diri sendiri selama  $indeks <= $jumlah
//     if ($indeks < $jumlah){
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

// Menu bertingkat
// Langkah 2
$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Wisata",
        "subMenu" => [
          [
            "nama" => "Pantai"
          ],
          [
            "nama" => "Gunung"
          ]
        ]
      ],
      [
        "nama" => "Kuliner"
      ],
      [
        "nama" => "Hiburan"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kontak"
  ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>