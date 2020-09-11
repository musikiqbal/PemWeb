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

//Cara Upload Gambar
function upload()
{
  $nama_file = $_FILES['Gambar']['name'];
  $tipe_file = $_FILES['Gambar']['type'];
  $ukuran_file = $_FILES['Gambar']['size'];
  $error = $_FILES['Gambar']['error'];
  $tmp_file = $_FILES['Gambar']['tmp_name'];

  //ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    //echo "<script>
    //alert ('Gambar harus terisi !');
    //</script>";
    return 'nophoto.png';
  }

  //Cek extension gambar
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
    alert ('Gambar harus berekstensi : jgp , jpeg, png');
    </script>";
    return false;
  }

  //cek type file gambar
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
  alert ('Format Gambar Palsu, mohon diisi sesuai format !');
  </script>";
    return false;
  }

  //cek ukuran file gambar
  //misal : max 5Mb
  if ($ukuran_file > 5000000) {
    echo "<script>
  alert ('Ukuran gambar terlalu besar !');
  </script>";
    return false;
  }

  //ketika file gambar memenuhi syarat
  //Generate nama file gambar baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;

  //maka upload file
  move_uploaded_file($tmp_file, 'Image/' . $nama_file_baru);
  return $nama_file_baru;
}


function Tambah($data)
{
  $conn = koneksi();



  //$Gambar = htmlspecialchars($data['Gambar']);
  //Upload gambar
  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }
  $Nama = htmlspecialchars($data['Nama']);
  $Nim = htmlspecialchars($data['Nim']);
  $Kelas = htmlspecialchars($data['Kelas']);
  $Jurusan = htmlspecialchars($data['Jurusan']);
  $Email = htmlspecialchars($data['Email']);

  $query = "INSERT INTO data_mahasiswa VALUES
  (null, '$Gambar', '$Nama', '$Nim', '$Kelas', '$Jurusan', '$Email');";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  //Menghapus gambar dalam folder local
  $mhs = query("SELECT * FROM data_mahasiswa WHERE id = $id");
  if ($mhs['Gambar'] != 'nophoto.png') {
    unlink('Image/' . $mhs['Gambar']);
  }


  mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function Edit($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }
  if ($Gambar == 'nophoto.png') {
    $Gambar = $gambar_lama;
  }

  $Nama = htmlspecialchars($data['Nama']);
  $Nim = htmlspecialchars($data['Nim']);
  $Kelas = htmlspecialchars($data['Kelas']);
  $Jurusan = htmlspecialchars($data['Jurusan']);
  $Email = htmlspecialchars($data['Email']);

  $query = "UPDATE data_mahasiswa SET 
            Gambar = '$Gambar', 
            Nama = '$Nama', 
            Nim = '$Nim', 
            Kelas = '$Kelas', 
            Jurusan = '$Jurusan', 
            Email = '$Email' 
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function search($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM data_mahasiswa 
            Where Nama LIKE '%$keyword%' OR
            Nim LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(($data['Username']));
  $password = htmlspecialchars(($data['Password']));

  //Cek username

  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

    //cek Password

    if (password_verify($password, $user['Password'])) {
      //set session
      $_SESSION['Login'] = true;

      header("Location: Index.php");
      exit;
    }
  }
  return [
    'Error' => True,
    'Pesan' => 'Username / Password Salah !'
  ];
}

function Daftar($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  //Jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
          alert('Username / Password Tidak Boleh Kosong !');
          document.location.href='Daftar.php';
          </script>";
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username' ")) {
    echo "<script>
          alert('Username Sudah Terdaftar !');
          document.location.href='Daftar.php';
          </script>";
    return false;
  }

  //Jika Konfirmasi password ridak sesuai
  if ($password1 !== $password2) {
    echo "<script>
          alert('Password Tidak Sesuai !');
          document.location.href='Daftar.php';
          </script>";
    return false;
  }
  //Pembatasan jumlah karakter password
  if (strlen($password1) < 5) {
    echo "<script>
          alert('Password Terlalu Pendek !');
          document.location.href='Daftar.php';
          </script>";
    return false;
  }
  //pembatasan jumlah karakter username
  if (strlen($username) < 5) {
    echo "<script>
          alert('Username Terlalu Pendek !');
          document.location.href='Daftar.php';
          </script>";
    return false;
  }
  //Jika Sudah sesuai Maka :
  //1. Enkripsi Password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  //2. Insert Ke tabel
  $query = "INSERT INTO user VALUES (null, '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
