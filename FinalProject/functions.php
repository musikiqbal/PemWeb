<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'uas');
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

//Cara Upload foto
function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  //ketika tidak ada foto yang dipilih
  if ($error == 4) {
    //echo "<script>
    //alert ('foto harus terisi !');
    //</script>";
    return 'nophoto.png';
  }

  //Cek extension gambar
  $daftar_foto = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_foto)) {
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



  //$Gambar = htmlspecialchars($data['foto']);
  //Upload gambar
  $foto = upload();
  if (!$foto) {
    return false;
  }
  $nama = htmlspecialchars($data['nama']);
  $ttl = htmlspecialchars($data['ttl']);
  $kelamin = htmlspecialchars($data['kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $rtrw = htmlspecialchars($data['rtrw']);
  $kel = htmlspecialchars($data['kel']);
  $kec = htmlspecialchars($data['kec']);
  $kab = htmlspecialchars($data['kab']);
  $agama = htmlspecialchars($data['agama']);
  $perkawinan = htmlspecialchars($data['perkawinan']);
  $pekerjaan = htmlspecialchars($data['pekerjaan']);
  $foto = htmlspecialchars($data['foto']);

  $query = "INSERT INTO data_ktp VALUES
  (null, '$nama', '$ttl', '$kelamin', '$alamat', '$rtrw', '$kel', '$kec', '$kab', '$agama', '$perkawinan', '$pekerjaan','$foto');";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  //Menghapus foto dalam folder local
  $mhs = query("SELECT * FROM data_ktp WHERE id = $id");
  if ($mhs['foto'] != 'nophoto.png') {
    unlink('Image/' . $mhs['foto']);
  }


  mysqli_query($conn, "DELETE FROM data_ktp WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function Edit($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $foto = upload();
  if (!$foto) {
    return false;
  }
  if ($foto == 'nophoto.png') {
    $foto = $gambar_lama;
  }

  $nama = htmlspecialchars($data['nama']);
  $ttl = htmlspecialchars($data['ttl']);
  $kelamin = htmlspecialchars($data['kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $rtrw = htmlspecialchars($data['rtrw']);
  $kel = htmlspecialchars($data['kel']);
  $kec = htmlspecialchars($data['kec']);
  $kab = htmlspecialchars($data['kab']);
  $agama = htmlspecialchars($data['agama']);
  $perkawinan = htmlspecialchars($data['perkawinan']);
  $pekerjaan = htmlspecialchars($data['pekerjaan']);
  $foto = htmlspecialchars($data['foto']);

  $query = "UPDATE data_ktp SET 
            nama = '$nama', 
            ttl = '$ttl', 
            kelamin = '$kelamin', 
            alamat = '$alamat', 
            rtrw = '$rtrw'
            kel = '$kel'
            kec = '$kec'
            kab = '$kab'
            agama = '$agama'
            perkawinan = '$perkawinan'
            pekerjaan = '$pekerjaan'
            foto = '$foto', 
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function search($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM data_ktp 
            Where nama LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%'";

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

  $username = htmlspecialchars(($data['username']));
  $password = htmlspecialchars(($data['password']));

  //Cek username

  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

    //cek Password

    if (password_verify($password, $user['password'])) {
      //set session
      $_SESSION['login'] = true;


      header("Location: home.php");
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
          document.location.href='daftar.php';
          </script>";
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username' ")) {
    echo "<script>
          alert('Username Sudah Terdaftar !');
          document.location.href='daftar.php';
          </script>";
    return false;
  }

  //Jika Konfirmasi password ridak sesuai
  if ($password1 !== $password2) {
    echo "<script>
          alert('Password Tidak Sesuai !');
          document.location.href='daftar.php';
          </script>";
    return false;
  }
  //Pembatasan jumlah karakter password
  if (strlen($password1) < 5) {
    echo "<script>
          alert('Password Terlalu Pendek !');
          document.location.href='daftar.php';
          </script>";
    return false;
  }
  //pembatasan jumlah karakter username
  if (strlen($username) < 5) {
    echo "<script>
          alert('Username Terlalu Pendek !');
          document.location.href='daftar.php';
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
