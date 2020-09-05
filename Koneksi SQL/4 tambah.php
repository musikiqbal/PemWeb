<?php
require 'Functions.php';

if (isset($_POST['Tambah'])) {
  if (Tambah($_POST) > 0) {
    echo "<script>
alert('Data Berhasil Ditambahkan');
document.location.href='2 Lihat Detail.php';
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
  <form action="" method="POST">
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
          <input type="text" name="Gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="Tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>