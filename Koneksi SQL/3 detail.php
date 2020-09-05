<?php
require 'Functions.php';
$id = $_GET['id'];
$m = query("SELECT * FROM data_mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DETAIL MAHASISWA</title>
</head>

<body>
  <h3>DETAIL MAHASISWA</h3>
  <ul>
    <li><img src="Image/<?= $m['Gambar']; ?>" width="60"></li>
    <li>NIM : <?= $m['Nim']; ?></li>
    <li>NAMA : <?= $m['Nama']; ?></li>
    <li>Kelas : <?= $m['Kelas']; ?></li>
    <li>JURUSAN : <?= $m['Jurusan']; ?></li>
    <li>EMAIL : <?= $m['Email']; ?></li>
    <li><a href="">Edit</a> | <a href="">Delete</a></li>
    <li><a href="2 Lihat Detail.php">Back</a></li>
  </ul>
</body>

</html>