<?php
require 'functions.php';
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
    form {
      display: inline-block;
      border: groove;
      width: 635px;
      height: max-content;
    }

    .wrap {
      background: white;
      width: 1500px;
      margin: auto;
    }

    /*bagian header*/
    .wrap .header {
      background: white;
      /*height: 50px;*/
      padding: 1px;
      text-align: center;

    }

    /*bagian menu*/
    .wrap .menu {
      background: white;

    }

    .wrap .menu ul {
      padding: 10px;
      margin: 0;
      background: white;
      overflow: hidden;

    }

    .wrap .menu ul li {
      float: right;
      list-style-type: none;
      padding: 20px;
      width: 20%;
      background: white;
    }

    /*akhir menu*/

    .clear {
      clear: both;
    }

    .badan {
      height: 1000px;
      width: 1500px;
      background: white;
    }

    /*bagian sidebar*/
    .wrap .badan .sidebar {
      background: white;
      float: left;
      width: 45%;
      height: 100%;
    }

    .wrap .footer {
      width: 100%;
      padding: 10px;
      background: white;
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
  <title>Diagnosis</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="page-top" style="background-color:white">
  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="home.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="about.php">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Soal</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Hasil</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
  <table>

  </table>
  <div class="wrap">
    <div class="menu">
      <div class="header">
        <h1>PREDIKSI</h1>
        <p>Pilih Jawaban Yang Tersedia Sesuai Keadaan Anda</p>
        <hr style="border-top: 3px double; width: 1460px; margin-left: 2.6%;">
      </div>
    </div>
    <div class="badan">
      <div class="sidebar">
        <ul>
          <form id="form2" name="form2" method="post" action="">
            <h6 align="center"><u>Daftar Pertanyaan :</u></h6>
            <?php
            $tampil = "SELECT kondisi FROM indikasi";
            $query = mysqli_query(koneksi(), $tampil);

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
        <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary" style="width: 55%;">CEK SEKARANG !!!</button>
        <br><br>
        <div class="box-body table-responsive col-lg-6">
          <u>HASIL PREDIKSI : <br></u>
          <br>
          <table id="example1" class="table table-bordered table-striped" border="2" style="margin-left: 2%; text-align: justify;">
            <thead>
              <tr>
                <th style="text-align: center;">Jumlah Kondisi</th>
                <th style="text-align: center;"> Kecerdasan</th>
                <th style="text-align: center;">Deskripsi</th>
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

                $result = mysqli_query(koneksi(), $tampil);
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
          <footer class="container-fluid text-center">
            <p>Copyright &copy; Kelompok 33 <br> Pemograman Web 2020</p>
          </footer>
        </div>
      </div>
      </form> <!-- END FORM2 -->
    </div>
  </div>

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