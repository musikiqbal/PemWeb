<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'belajar');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);
  // jika datanya hanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function Tambah($data)
{
  $conn = koneksi();

  $Gambar = htmlspecialchars($data['Gambar']);
  $Nama = htmlspecialchars($data['Nama']);
  $Nim = htmlspecialchars($data['Nim']);
  $Kelas = htmlspecialchars($data['Kelas']);
  $Jurusan = htmlspecialchars($data['Jurusan']);
  $Email = htmlspecialchars($data['Email']);

  $query = "INSERT INTO data_mahasiswa VALUES
  (null, '$Gambar', '$Nama', '$Nim', '$Kelas', '$Jurusan', '$Email');";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
