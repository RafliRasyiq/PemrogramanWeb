<?php
$photos = array(
    array(
        'image' => '1.jpeg',
        'nama' => 'Mavtavish',
        'nim' => '22417224',
        'jurusan' => 'Teknik Informatika',
        'email' => 'agent.mactavish@gmail.com'
    ),
    array(
        'image' => '2.jpg',
        'nama' => 'Sabsa',
        'nim' => '2241760123',
        'jurusan' => 'DKV',
        'email' => 'sabrin@gmail.com'
    ),
    array(
        'image' => '3.jpg',
        'nama' => 'Udin',
        'nim' => '2241760231',
        'jurusan' => 'Teknik Sipil',
        'email' => 'udin87@gmail.com'
    ),
    array(
        'image' => '4.jpg',
        'nama' => 'Yezha',
        'nim' => '2241760223',
        'jurusan' => 'Manajemen Bisnis',
        'email' => 'yeezi@gmail.com'
    ),
    array(
        'image' => '5.jpg',
        'nama' => 'Asep',
        'nim' => '2241760876',
        'jurusan' => 'Perpajakan',
        'email' => 'asep@gmail.com'
    ),
);

foreach ($photos as $photo) {
    echo "<li><img src='img/" . $photo['image'] . "' alt='Photo' width='200' height='150'></li>";
    echo "<li>Nama: " . $photo['nama'] . "</li>";
    echo "<li>NIM: " . $photo['nim'] . "</li>";
    echo "<li>Jurusan: " . $photo['jurusan'] . "</li>";
    echo "<li>Email: " . $photo['email']. "</li>";
    echo "<br>";
}
?>