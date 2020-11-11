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
      <p><a href="index.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block">DIAGNOSA</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR KECERDASAN</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-primary btn-block active">ABOUT</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <center><h2>ABOUT</h2></center>

      <div class="panel panel-success">
      <div class="panel-heading">Dibuat Oleh :</div>
      <div class="panel-body">
          Dony Prasetyo<br>
          Rahayu Tri Wahyuni<br>
          Dikki Setiawan<br>
          Lyli Wijaya<br>
          Muhammad Faiz Akmal<br>
          Damar Dananjayal<br>
          </div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Sistem Pakar Minat Bakat. Dikembangkan Oleh :</div>
      <div class="panel-body">
        Muhammad Budhiluhoer - 1610631170235<br>
        Desy Anggraeni - 1610631170065 <br>
        Fildzah Zia Ghassani - 1610631170091<br>
        Kartika Hijjayanti - 1610631170129 <br>
        Wendry Tri Widiantoro - 1610631170224
      </div>
    </div>

    </div>
  </div>
</div>
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
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username" autofocus>
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
  <p>S1-Sistem Informasi 2013</p>
</footer>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
