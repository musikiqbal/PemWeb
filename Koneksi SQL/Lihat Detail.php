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
      <th>#</th>
      <th>Gambar</th>
      <th>NAMA</th>
      <th>AKSI</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="Image/<?= $m['Gambar']; ?>" width="60"></td>
        <td><?= $m['Nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
    <table>
</body>

</html>