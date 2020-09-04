<?php
require 'Functions.php';
$mahasiswa = query("SELECT * FROM data_mahasiswa");
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>JURUSAN</th>
      <th>TLP</th>
      <th>AKSI</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="Image/<?= $m['Gambar']; ?>" width="60"></td>
        <td><?= $m['Nim']; ?></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['Kelas']; ?></td>
        <td><?= $m['Jurusan']; ?></td>
        <td><?= $m['Tlp']; ?></td>
        <td>
          <a href="">Edit</a> | <a href="">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
    <table>
</body>

</html>