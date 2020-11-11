<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require 'bootstraping.html'; ?> 
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <?php require 'nav.html'; ?>
    
    <div class="col-sm-8 text-center">
      <h1>SISTEM PAKAR</h1>
      <h4>Selamat datang <?php echo $login_session; ?>. Silahkan pilih menu yang diinginkan</h4>
    </div>

</div>

<footer class="container-fluid text-center">
  <p>S1-Sistem Informasi 2013</p>
</footer>

</body>
</html>
