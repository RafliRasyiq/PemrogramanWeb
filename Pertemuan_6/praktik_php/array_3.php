<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
</head>

<body>
    <h2>Multidimensional array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        // penambahan array movie
        $movie = array(
            array("Avengers: Invity War", 2018, 8.7),
            array("The Avengers", 2012, 8.1),
            array("Guardian of the Galaxy", 2014, 8.1),
            array("Iron Man", 2008, 7.9)
        );
        // pemanggilan array berdasarkan indeks
        echo "<tr>";
        echo "<td>" . $movie[0][0] . "</td>";
        echo "<td>" . $movie[0][1] . "</td>";
        echo "<td>" . $movie[0][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[1][0] . "</td>";
        echo "<td>" . $movie[1][1] . "</td>";
        echo "<td>" . $movie[1][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[2][0] . "</td>";
        echo "<td>" . $movie[2][1] . "</td>";
        echo "<td>" . $movie[2][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[3][0] . "</td>";
        echo "<td>" . $movie[3][1] . "</td>";
        echo "<td>" . $movie[3][2] . "</td>";
        echo "</tr>";
        ?>
    </table>
</body>
<!-- Soal 3 -->
<!-- Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu! -->
<!-- Merupakan contoh dari penggunaan array multidimensional -->
</html>