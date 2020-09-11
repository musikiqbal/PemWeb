<?php
session_start();

if (!isset($_SESSION['Login'])) {
  header("Location: Login.php");
  exit;
}

require 'Functions.php';

//Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: Index.php");
  exit;
}

//Ambil id URL
$id = $_GET['id'];

//Query Mahasiswa Berdasarkan id
$m = query("SELECT * FROM data_mahasiswa WHERE id = $id");

if (isset($_POST['Edit'])) {
  if (Edit($_POST) > 0) {
    echo "<script>
alert('Data Berhasil Diedit');
document.location.href='Index.php';
    </script>";
  } else {
    echo "Data gagal Diedit";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Mahasiswa</title>
</head>

<body>
  <h3>Edit Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $m['Gambar']; ?>">
        <label>
          Gambar :
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
        </label>
        <img src="Image/<?= $m['Gambar']; ?>" width="200" style="display: block;" class="Image-Preview">
      </li>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required value="<?= $m['Nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nim :
          <input type="text" name="Nim" required value="<?= $m['Nim']; ?>">
        </label>
      </li>
      <li>
        <label>
          Kelas :
          <input type="text" name="Kelas" required value="<?= $m['Kelas']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="Jurusan" required value="<?= $m['Jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="Email" required value="<?= $m['Email']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="Edit">Edit Data</button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>