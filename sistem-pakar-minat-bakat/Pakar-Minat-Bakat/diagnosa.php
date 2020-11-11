<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
  header("Location: about.php");
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
  
<!-- navigasi -->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
      
      <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block active">DIAGNOSA</button></a></p>
      
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR KECERDASAN</button></a></p>

      <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
      
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
    </div>

    <div class="col-sm-8 text-left"> 
      <center><h2>DIAGNOSA</h2></center>
        
      <!-- <form id="form1" name="form1" method="post" action="">           
				
        <select class="form-control" name="tanaman" onChange='this.form.submit();'>
				  <option>-</option>
          <option>Kecerdasan</option>
  		  </select>
      
      </form><br> -->

      <form id="form2" name="form2" method="post" action="">
 			
      <?php 
                         			
         $tampil = "SELECT kondisi FROM indikasi";
          $query= mysqli_query($konek_db,$tampil);
            
            // cetak data dengan pengulangan
            $id = 0;
            while($hasil=mysqli_fetch_array($query)){  
      					$id++;
                echo "<tr>
                <td>
                <input type='checkbox' value='".$hasil['kondisi']."' name='kondisi[]'/>"
                .$hasil['kondisi']."
                </td>
                </tr>"."<br>";
      			}

			?>      
        
        <br>
        <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK KECERDASAN</button>
        <br><br>
        
        <div class="panel panel-info">
          <div class="panel-heading">HASIL</div>
          <div class="panel-body">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>Jumlah Kondisi</th>
					            <th>Kecerdasan</th>
                      <th>Deskripsi</th>
                  </tr>
                </thead>

         <?php			
        if(isset($_POST['submit'])){

            $kondisi = $_POST['kondisi']; // MENANGKAP NILAI NILAI YANG TELAH DIPILIH
            $jumlah_dipilih = count($kondisi); // JUMLAH PILIHAN DARI CHECKBOX
           
           for( $x=0; $x<$jumlah_dipilih; $x++ ){
             
             $tampil = "SELECT DISTINCT p.id, p.deskripsi, p.kecerdasan FROM
             indikasi b, kecerdasan p 
             WHERE b.kondisi='$kondisi[$x]' AND p.kecerdasan=b.kecerdasan
             GROUP BY kondisi";
             
             $result = mysqli_query($konek_db, $tampil);
             $hasil  = mysqli_fetch_array($result);   
           
           } //END FOR
           
            echo "
                <tr>
                   <td>".$x."</td>  
		                <td>".$hasil['kecerdasan']."</td>  
                    <td>".$hasil['deskripsi']."</td> 
  		          </tr>   
              ";
        } // END IF
    
        ?>
            </table>
            </div>
          </div>
        </div>
      </form> <!-- END FORM2 -->
             
    </div>
  </div>
</div>

<!-- FORM LOGIN -->
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
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
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
</div> <!-- END LOGIN --> 

<footer class="container-fluid text-center">
  <p>S1-Sistem Informasi 2013</p>
</footer>

<script language="JavaScript" type="text/javascript">

// EVENT KLIK PADA MODAL LOGIN
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

// KONIRMASI PADA FORM GEJALA
function checkDiagnosa(){
    return confirm('Apakah sudah benar gejalanya?');
}

</script>

</body>
</html>
