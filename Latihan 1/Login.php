<?php
session_start();

if (isset($_SESSION['Login'])) {
  header("Location: Index.php");
  exit;
}
require 'Functions.php';

//Ketika Tombol login ditekan
if (isset($_POST['Login'])) {
  $Login =  Login($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Login</h3>
  <?php if (isset($Login['Error'])) : ?>
    <p style="color :brown; font-style: Italic; "><?= $Login['Pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username
          <input type="text" name="Username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password
          <input type="password" name="Password" required>
        </label>
      </li>
      <li>
        <button type="submit" name="Login">Login</button>
      </li>
      <li>
        <a href="Daftar.php">Daftar</a>
      </li>
    </ul>
  </form>
</body>

</html>