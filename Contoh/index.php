<?php
session_start();

if (isset($_SESSION['index'])) {
  header("Location: index.php");
  exit;
}
require 'functions.php';

//Ketika Tombol login ditekan
if (isset($_POST['login'])) {
  $login =  login($_POST);
}

if (isset($_POST['daftar'])) {
  if (daftar($_POST) > 0) {
    echo "<script>
  alert('Registrasi Berhasil');
  document.location.href='home.php';
  </script>";
  } else {
    echo 'Pendaftaran GAGAL !';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>index</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body>
  <!-- Modal daftar -->
  <div id="mydaftar" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">R e g i s t e r</h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username Harus Lebih Dari 5 Karakter" name="username" autocomplete="off" autofocus required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password1" placeholder="Password Harus Lebih Dari 5 Karakter" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Konfirmasi Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password2" placeholder="Password Harus Sama" required>
            </div>
            <button type="submit" name="daftar" class="btn btn-success">Register</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" name="cancel">Cancel</button>
            <hr>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal daftar -->

  <!-- Modal login -->
  <div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">L o g i n</h4>
        </div>

        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username" name="username" autocomplete="off" autofocus required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-success">Login</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" name="cancel">Cancel</button>
            <hr>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Modal Login -->

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Selamat Datang</h1>
      <h3 class="mb-5"><em>Aplikasi Minat Dan Bakat</em></h3>
      <?php if (isset($login['Error'])) : ?>
        <p style="color :white; font-style: Italic; "><?= $login['Pesan']; ?></p>
      <?php endif; ?>
      <ul>
        <li data-toggle="modal" data-target="#mydaftar"><a href="#" class="btn btn-primary btn-xl js-scroll-trigger" style="margin-right: 4%;"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
      </ul>
      <p style="color: white;" data-toggle="modal" data-target="#mylogin">Silakan <a href="#" style="color: white;"><strong>LOGIN </a></strong>Jika Sudah Mempunyai Akun</p>
      <hr style="width: 50%;">
      <p style="color: white;">Copyright &copy; Kelompok 33 <br> Pemograman Web 2020</p>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>