<?php
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

/** Soal 9
 * -	Jika kode program di atas dijalankan, 
 * apa yang akan terjadi dan bagaimana dampaknya jika itu di lakukan kemukakan pendapat kalian! 
 */
// terjadi infinite loop

// for ($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }

// function tampilkanAngka (int $jumlah, int $indeks = 1){
//     echo "Perulangan ke-{$indeks} <br>";

//     if ($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

/** Soal 10
 * Jalankan kode program di atas dan bagaimana outputnya kemudian jelaskan kenapa bisa seperti itu. 
 */
// maka hanya menampilkan sebanyak 20 saja
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
                        "nama"  => "Pantai"
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

// function tampilkanMenuBertingkat(array $menu){
//     echo "<ul>";
//     foreach ($menu as $key => $item) {
//         echo "<li>{$item['nama']}</li>";
//     }
//     echo "</ul>";
// }

// Soal 11
function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if(isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>