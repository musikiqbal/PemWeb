<?php
require 'functions.php';
if (isset($_POST['daftar'])) {
  if (Daftar($_POST) > 0) {
    echo "<script>
  alert('Pendaftaran Berhasil');
  document.location.href='login.php';
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
  <title>Register</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">R e g i s t e r</h1>
      <form action="" method="POST">
        <ul>
          <li>
            <label style="color: white; margin-right: 10.3%;">
              Username :
              <input type="text" name="username" size="40" placeholder="Username Harus Lebih Dari 5 Karakter" autofocus autocomplete="off" required>
            </label>
          </li>
          <li>
            <label style="color: white; margin-right: 10%;">
              Password :
              <input type="password" name="password1" size="40" placeholder="Password Harus Lebih Dari 5 Karakter" required>
            </label>
          </li>
          <li>
            <label style="color: white; margin-right: 17.2%;">
              Konfirmasi Password :
              <input type="password" name="password2" size="40" placeholder="Password Harus Lebih Dari 5 Karakter" required>
            </label>
          </li>
          <li>
            <button type="submit" name="daftar" class="btn btn-primary btn-xl js-scroll-trigger" style="width: 30%; margin-right: 3.5%;">Register</button>
          </li>
          <li>
            <a href="index.php" style="color: white; margin-right: 3.5%;">Back</a>
          </li>
        </ul>
      </form>
</body>

</html>