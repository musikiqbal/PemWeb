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

//mengambil id dari url
$id = $_GET['id'];
if (hapus($id) > 0) {
  echo "<script>
alert('Data Berhasil Dihapus');
document.location.href='Index.php';
  </script>";
} else {
  echo "Data gagal Dihapus";
}
