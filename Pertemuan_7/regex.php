<!DOCTYPE html>
<html>

<head>
    <title>Fungi REGEX</title>
</head>

<body>
    <?php
    // Langkah 2
    // $pattern = '/[a-z]+/';
    // $text = 'This is a Sample Text';
    // if(preg_match($pattern, $text, $MATCHES)){
    //     echo "Huruf kecil ditemukan".$MATCHES[0];
    // }else{
    //     echo "Tidak ada huruf kecil!";
    // }

    // Langkah 6
    // $pattern = '/[0-9]+/';
    // $text = 'There are 123 apples';
    // if(preg_match($pattern, $text, $MATCHES)){
    //     echo "Cocokan : ".$MATCHES[0];
    // }else{
    //     echo "Tidak ada yang cocok!";
    // }

    // Langkah 10
    // $pattern = '/apple/';  
    // $replacement = 'banana';
    // $text = 'i like apple pie';
    // $new_text = preg_replace($pattern, $replacement, $text);
    // echo $new_text; //Output : "I like banana pie."

    $pattern = '/go{2,2}d/';
    $text = 'god id good';
    if (preg_match($pattern, $text, $MATCHES)) {
        echo "Cocokan : " . $MATCHES[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    ?>
    <!-- SOAL 5.1 -->
    <!-- Kode ini menemukan hasil dari cocokkan huruf kecil dari 
    kalimat dengan huruf kecil dari a hingga z.-->

    <!-- SOAL 5.2 -->
    <!-- untuk menggabungkan angka yang muncul dari 0 hingga 9, dan kemudian menambah kuantifier (+) 
    untuk menunjukkan lebih dari satu karakter.-->

    <!-- SOAL 5.3 -->
    <!-- Dalam percobaan ini, kami menggunakan fungsi preg_replace serupa dengan kode program, 
    sehingga kami membuat variabel baru yang disebut $new_text = preg_replace($pattern, $replacement, $text).-->

    <!-- SOAL 5.4 -->
    <!-- Pada percobaan ini, penggunaan kuantifier (*) menghasilkan output, yaitu sesuai dengan kata pertama yang tepat pada kalimat yang sesuai. -->

    <!-- SOAL 5.5 -->
    <!-- Karakter "o" muncul sebagai nol atau sekali. -->

    <!-- SOAL 5.6 -->
    <!-- Penggunaan "n,m" berarti bahwa huruf akan ditampilkan sebanyak n kali dan sebanyak m kali.-->
</body>

</html>