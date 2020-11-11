<?php

include('koneksi.php');

$query = "DELETE FROM kecerdasan WHERE id='".$_GET['id']."'";
mysqli_query($konek_db, $query);

header("location:hamadanpenyakit.php");

?>