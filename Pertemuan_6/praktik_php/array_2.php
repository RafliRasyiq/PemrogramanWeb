<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array 2</title>
  <style>
    /* Penambahan style */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    td:first-child {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <?php
  $Dosen = [
    'nama' => 'Elon Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
  ];

  // echo "Nama: {$Dosen ['nama']} <br>";
  // echo "Domisili: {$Dosen ['domisili']} <br>";
  // echo "Jenis Kelamin: {$Dosen ['jenis_kelamin']} <br>";
  ?>

  <!-- Soal 2 -->
  <!-- Amati hasil yang ditampilkan. Kemudian tambahkan style tabel pada
  output tampilan tersebut supaya lebih menarik. -->
  <table border="1" cellpadding="6">
    <tr>
      <td><strong>Informasi Dosen</strong></td>
      <td></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
      <td>Domisili</td>
      <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
  </table>
</body>

</html>