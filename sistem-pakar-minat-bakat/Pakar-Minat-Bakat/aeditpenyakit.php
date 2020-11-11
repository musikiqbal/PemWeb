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
        
    <h2 class="text-center">EDIT KECERDASAN</h2>
    
    <form method="post" action="">
      <div class="form-group">
      		<label class="control-label col-sm-2">Kecerdasan* : </label>
      		<div class="col-sm-10">
                <?php
                      $tampil = "SELECT * FROM kecerdasan WHERE id='".$_GET['id']."'";
                      $sql = mysqli_query ($konek_db,$tampil);
                      while($data = mysqli_fetch_array ($sql)) {
                       echo "<input type='text' class='form-control' id='kecerdasan' name='kecerdasan' value='".$data['kecerdasan']."'><br>";
                      }
                ?>
     		 </div>
      </div>	

      <div class="form-group">
      		<label class="control-label col-sm-2">Deskripsi* : </label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kecerdasan WHERE id='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                        {
                           echo "<input type='text'  class='form-control' id='deskripsi' name='deskripsi' value='".$data['deskripsi']."'><br>";
                        }
                ?>
     		 </div>
        </div>

      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
         
<?php
if(isset($_POST['submit'])){
  $id = $_GET['id'];
  $kecerdasan = $_POST['kecerdasan'];
  $deskripsi = $_POST['deskripsi'];

  $query = "UPDATE kecerdasan SET kecerdasan='$kecerdasan', deskripsi='$deskripsi' WHERE id='$id' ";
  mysqli_query($konek_db, $query);
}
?>

        </form><br>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>S1-Sistem Informasi 2013</p>
</footer>

</body>
</html>
