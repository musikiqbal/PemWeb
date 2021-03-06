<?php
session_start();

if (!isset($_SESSION['Login'])) {
  header("Location: Login.php");
  exit;
}

require 'Functions.php';

if (isset($_POST['Tambah'])) {
  if (Tambah($_POST) > 0) {
    echo "<script>
alert('Data Berhasil Ditambahkan');
document.location.href='Index.php';
    </script>";
  } else {
    echo "Data gagal Ditambahkan";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Tambah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nim :
          <input type="text" name="Nim" required>
        </label>
      </li>
      <li>
        <label>
          Kelas :
          <input type="text" name="Kelas" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="Jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="Email" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
        </label>
        <img src="Image/nophoto.png" width="200" style="display: block;" class="Image-Preview">
      </li>
      <li>
        <button type="submit" name="Tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>