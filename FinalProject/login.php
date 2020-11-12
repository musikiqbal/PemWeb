<?php
require 'functions.php';

//Ketika Tombol login ditekan
if (isset($_POST['login'])) {
  $Login =  login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
</head>

<body>
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">L o g i n</h1>
      <?php if (isset($Login['Error'])) : ?>
        <p style="color :white; font-style: Italic; "><?= $Login['Pesan']; ?></p>
      <?php endif; ?>
      <form action="" method="POST">
        <ul>
          <li>
            <label style="color: white; margin-right: 3.5%;">
              Username :
              <input type="text" name="username" autofocus autocomplete="off" required>
            </label>
          </li>
          <li>
            <label style="color: white; margin-right: 3.5%;">
              Password :
              <input type="password" name="password" required>
            </label>
          </li>
          <li>
            <button type="submit" name="login" class="btn btn-primary btn-xl js-scroll-trigger" style="width: 30%; margin-right: 3.5%;">Login</button>
          </li>
          <li>
            <a href="index.php" style="color: white; margin-right: 3.5%;">Back</a>
          </li>
        </ul>

      </form>
</body>

</html>