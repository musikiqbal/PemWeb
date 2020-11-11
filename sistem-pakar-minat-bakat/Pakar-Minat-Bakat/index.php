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
    <div class="col-sm-2 sidenav">
      <p><a href="index.php"><button type="button" class="btn btn-primary btn-block active">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block">DIAGNOSA</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR KECERDASAN</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
      <br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
    </div>
    <div class="col-sm-8 text-left"><br>
        <div class="panel panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                <center>
                    <h2>SISTEM PAKAR MINAT BAKAT PADA ANAK</h2>
                    <img src="gambar.jpg" width="300" ><br><br>
                </center>
                    <p align=justify>
                      Pada dasarnya setiap manusia adalah makhluk yang pintar atau makhluk yang cerdas. Namun jika yang anda maksud cerdas dalam artian selalu mengangkat tangan saat guru memberi pertanyaan, maka kamu salah besar. Kecerdasan tidak bisa diukur seperti demikian. <br><br> Dalam hakikatnya setiap manusia adalah makhluk yang cerdas, Namun jika kamu menilai seekor ikan dari kemampuannya memanjat pohon. Maka ia akan meyakini seumur hidupnya bahwa ia adalah orang yang bodoh. Begitulah kutipan dari Albert Einstein.<br><br> Seperti yang dikatakan Albert Einstein, hal ini berarti bahwasanya setiap makhluk memiliki kemampuannya masing-masing. Bagaimana mungkin ikan dapat memanjat pohon, karena hal itu bukanlah keahlian ikan. Namun jika ikan tersebut berenang, maka akan terlihatlah kemampuan ikan yang sebenarnya. Begitupun pada manusia, setiap manusia memiliki kemampuannya masing-masing, pada dasarnya setiap manusia adalah makhluk yang cerdas. Dan itulah tugas seorang manusia, cari apa kemampuannya dan kembangkan kemampuan tersebut. <br><br>
                      <small>Sumber : <a href="http://www.zoneknowledge.com/2017/11/8-macam-kecerdasan-manusia-pada.html">http://www.zoneknowledge.com/2017/11/8-macam-kecerdasan-manusia-pada.html</a></small>
                    </p>
            </div>
        </div>
      
    </div>
  </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username" autofocus="">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>     
            
        </div>
      </div>
        
        
   
        
    </div>
  </div> 

<footer class="container-fluid text-center">
  <p>S1 Teknik Informatika UNSIKA 2018 - Semester 5 Kelas E</p>
</footer>

<script>
$("document").ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
