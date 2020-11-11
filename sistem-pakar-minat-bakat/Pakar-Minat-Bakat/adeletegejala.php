<?php

include('koneksi.php');

$query="DELETE FROM indikasi WHERE id='".$_GET['id']."'";
mysqli_query($konek_db, $query);

header("location:gejala.php");

?>