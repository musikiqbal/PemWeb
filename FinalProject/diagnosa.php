<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Diagnosis</title>
  <style>
    .wrap {
      background: blue;
      width: 1500px;
      margin: auto;
    }

    /*bagian header*/
    .wrap .header {
      background: orange;
      /*height: 50px;*/
      padding: 1px;
      text-align: center;

    }

    /*bagian menu*/
    .wrap .menu {
      background: papayawhip;
    }

    .wrap .menu ul {
      padding: 10px;
      margin: 0;
      background: plum;
      overflow: hidden;

    }

    .wrap .menu ul li {
      float: left;
      list-style-type: none;
      padding: 20px;
      width: 20%;
      background: blueviolet
    }

    /*akhir menu*/

    .clear {
      clear: both;
    }

    .badan {
      height: 1000px;
      width: 1500px;
      background: cornflowerblue;
    }

    /*bagian sidebar*/
    .wrap .badan .sidebar {
      background: darkcyan;
      float: left;
      width: 45%;
      height: 100%;
    }

    .wrap .footer {
      width: 100%;
      padding: 10px;
      background: darkred;
    }
  </style>
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
</head>

</html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="page-top">
  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="about.php">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="diagnosa.php">Diagnosa</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Soal</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Hasil</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Logout</a>
      </li>
    </ul>
  </nav>
  <div class="wrap">
    <div class="header">
      <h1>Diagnosis</h1>
      <p>Pilih Jawaban Yang Tersedia Sesuai Keadaan Anda</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Daftar Kecerdasan</a></li>
        <li><a href="#">Diagnosis</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
    <div class="badan">
      <div class="sidebar">
        <ul>
          <form id="form2" name="form2" method="post" action="">
            <h6><u>Daftar Pertanyaan :</u></h6>
            <?php
            $tampil = "SELECT kondisi FROM indikasi";
            $query = mysqli_query($konek_db, $tampil);

            // cetak data dengan pengulangan
            $id = 0;
            while ($hasil = mysqli_fetch_array($query)) {
              $id++;
              echo "<tr>
                 <td>
                 <input type='checkbox' value='" . $hasil['kondisi'] . "' name='kondisi[]'/>"
                . $hasil['kondisi'] . "
                 </td>
                 </tr>" . "<br>";
            }
            ?>
        </ul>
      </div>
      <div class="content">
        <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary" style="width: 55%;">CEK KECERDASAN</button>
        <br><br>

        <div class="panel panel-info">
          <div class="panel-heading" style="text-align: center;"></div>
          <div class="box-body table-responsive"><u>HASIL PREDIKSI</u>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Jumlah Kondisi</th>
                  <th>Kecerdasan</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>

              <?php
              if (isset($_POST['submit'])) {

                $kondisi = $_POST['kondisi']; // MENANGKAP NILAI NILAI YANG TELAH DIPILIH
                $jumlah_dipilih = count($kondisi); // JUMLAH PILIHAN DARI CHECKBOX

                for ($x = 0; $x < $jumlah_dipilih; $x++) {

                  $tampil = "SELECT DISTINCT p.id, p.deskripsi, p.kecerdasan FROM
             indikasi b, kecerdasan p 
             WHERE b.kondisi='$kondisi[$x]' AND p.kecerdasan=b.kecerdasan
             GROUP BY kondisi";

                  $result = mysqli_query($konek_db, $tampil);
                  $hasil  = mysqli_fetch_array($result);
                } //END FOR

                echo "
                <tr>
                   <td>" . $x . "</td>  
		                <td>" . $hasil['kecerdasan'] . "</td>  
                    <td>" . $hasil['deskripsi'] . "</td> 
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
  <footer class="container-fluid text-center">
    <p>Copyright &copy; Kelompok 33 <br> Pemograman Web 2020</p>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>
</body>