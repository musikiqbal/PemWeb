<?php
require '../Functions.php';
$mahasiswa = search($_GET['keyword']);
?>

<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NAMA</th>
    <th>AKSI</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color:brown ;font-style:italic;">Data Tidak Ditemukan !</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="Image/<?= $m['Gambar']; ?>" width="60"></td>
      <td><?= $m['Nama']; ?></td>
      <td>
        <a href="1 detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
  <table>