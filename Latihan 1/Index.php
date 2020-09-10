<?php
session_start();

if (!isset($_SESSION['Login'])) {
  header("Location: Login.php");
  exit;
}
require 'Functions.php';
$mahasiswa = query("SELECT * FROM data_mahasiswa");

//ketika tombol search diklik
if (isset($_POST['Search'])) {
  $mahasiswa = search($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <a href="Logout.php">Logout</a>
  <h3>Daftar Mahasiswa</h3>
  <a href="2 tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="39" placeholder="Masukkan Nama / Nim Mahasiswa" autocomplete="off" autofocus class="keyword">
    <button type="submit" name="Search" class="tombol-cari">Search</button>
  </form>
  <br>

  <div class="container">


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
  </div>
  <script src="js/script.js"></script>
</body>

</html>