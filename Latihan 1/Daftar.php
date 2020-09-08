<?php
require 'Functions.php';
if (isset($_POST['Daftar'])) {
  if (Daftar($_POST) > 0) {
    echo "<script>
  alert('Pendaftaran Berhasil');
  document.location.href='Login.php';
  </script>";
  } else {
    echo 'Pendaftaran GAGAL !';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
</head>

<body>
  <h3>Daftar</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" size="30" placeholder="Username Harus Lebih Dari 5 Karakter" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password1" size="30" placeholder="Password Harus Lebih Dari 5 Karakter" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" size="30" placeholder="Password Harus Lebih Dari 5 Karakter" required>
        </label>
      </li>
      <li>
        <button type="submit" name="Daftar">Daftar</button>
      </li>
    </ul>
  </form>
</body>

</html>