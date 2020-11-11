<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require 'bootstraping.html'; ?> 
  <script src="js/validator.js"></script>
    
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

    <div class="col-sm-8 text-left">
      
      <h2 class="text-center">INPUT INDIKASI</h2>

      <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="">
        
      <div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Kondisi* : </label>
				<div class="col-sm-10">
					
          <input type="text" class="form-control" required name="kondisi" data-error="Isi kolom dengan benar">
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors" role="alert"></div>

				</div>
			</div>

			<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Kecerdasan* : </label>
				<div class="col-sm-10">

					<input type="text" class="form-control" required name="kecerdasan" data-error="Isi kolom dengan benar">
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors" role="alert"></div>
				
        </div>
			</div>

      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
     
      <?php			
                if(isset($_POST['submit'])){
                
                  $kondisi = $_POST['kondisi'];
                  $kecerdasan = $_POST['kecerdasan'];
                
                  $query = "INSERT INTO indikasi SET kondisi='$kondisi', kecerdasan='$kecerdasan'";
                  $result = mysqli_query($konek_db, $query);

                  if($result){
                      echo '<script language="javascript">';
                      echo 'alert("Data Berhasil disimpan")';
                      echo '</script>';
                      }
                }
      ?>

		</form>		
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>S1-Sistem Informasi 2013</p>
</footer>

</body>
</html>
