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
    <h2 class="text-center">DAFTAR INDIKASI</h2>

    <a href="ainputgejala.php">
      <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </button>
    </a><br><br>

            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kondisi</th>
							              <th>Kecerdasan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>

<?php

$queri="SELECT * FROM indikasi";
$hasil=mysqli_query ($konek_db,$queri);  

$id = 0;
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        		<tr>  
        			<td>".$id."</td>  
        			<td>".$data[1]."</td>  
        			<td>".$data[2]."</td>
                    <td><a href=\"aeditgejala.php?id=" . $data[0] . "\"><i class='glyphicon glyphicon-pencil'></i></a>
              </td>
              <td>
                <a href=\"adeletegejala.php?id=".$data[0]."\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a>
              </td>
        		</tr>   
        	";      
			}
?>  


</table><br><br><br><br><br>
      </div>
    </div>
  </div>
</div>
    
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>
    
<footer class="container-fluid text-center">
  <p>S1-Sistem Informasi 2013</p>
</footer>

</body>
</html>
