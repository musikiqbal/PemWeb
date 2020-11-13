<!DOCTYPE html>
<html>

<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <title>APLIKASI PREDIKSI MINAT DAN BAKAT</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    h2 {
      font-family: sans-serif;
      font-weight: normal;
    }

    .slider {
      position: relative;
      overflow: hidden;
      background: #efefef;
    }

    .slider {
      margin: 20px auto;
      width: 768px;
      height: 450px;
    }

    .isi-slider img {
      width: 768px;
      height: 450px;
      float: left;
    }

    .isi-slider {
      position: absolute;
      width: 3900px;

      /*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
      animation-name: slider;
      animation-duration: 10s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
      -webkit-animation-name: slider;
      -webkit-animation-duration: 10s;
      -webkit-animation-timing-function: ease-in-out;
      -webkit-animation-iteration-count: infinite;
      -moz-animation-name: slider;
      -moz-animation-duration: 10s;
      -moz-animation-timing-function: ease-in-out;
      -moz-animation-iteration-count: infinite;
      -o-animation-name: slider;
      -o-animation-duration: 10s;
      -o-animation-timing-function: ease-in-out;
      -o-animation-iteration-count: infinite;
    }


    /*saat gambar di hover oleh cursor mouse maka berhenti slide*/
    .isi-slider:hover {
      -webkit-animation-play-state: paused;
      -moz-animation-play-state: paused;
      -o-animation-play-state: paused;
      animation-play-state: paused;
    }


    .isi-slider img {
      float: none;
    }

    .slider:after {
      font-size: 150px;
      position: absolute;
      z-index: 12;
      color: rgba(255, 255, 255, 0);
      left: 300px;
      top: 80px;
      -webkit-transition: 1s all ease-in-out;
      -moz-transition: 1s all ease-in-out;
      transition: 1s all ease-in-out;
    }

    .slider:hover:after {
      color: rgba(255, 255, 255, 0.6);
    }

    @-moz-keyframes slider {
      0% {
        left: 0;
        opacity: 0;
      }

      2% {
        opacity: 1;
      }

      20% {
        left: 0;
        opacity: 1;
      }

      21% {
        opacity: 0;
      }

      24% {
        opacity: 0;
      }

      25% {
        left: -768px;
        opacity: 1;
      }

      45% {
        left: -768px;
        opacity: 1;
      }

      46% {
        opacity: 0;
      }

      48% {
        opacity: 0;
      }

      50% {
        left: -1536px;
        opacity: 1;
      }

      70% {
        left: -1536px;
        opacity: 1;
      }

      72% {
        opacity: 0;
      }

      74% {
        opacity: 0;
      }

      75% {
        left: -2304px;
        opacity: 1;
      }

      95% {
        left: -2304px;
        opacity: 1;
      }

      97% {
        left: -2304px;
        opacity: 0;
      }

      100% {
        left: 0;
        opacity: 0;
      }
    }

    @-webkit-keyframes slider {
      0% {
        left: 0;
        opacity: 0;
      }

      2% {
        opacity: 1;
      }

      20% {
        left: 0;
        opacity: 1;
      }

      21% {
        opacity: 0;
      }

      24% {
        opacity: 0;
      }

      25% {
        left: -768px;
        opacity: 1;
      }

      45% {
        left: -768px;
        opacity: 1;
      }

      46% {
        opacity: 0;
      }

      48% {
        opacity: 0;
      }

      50% {
        left: -1536px;
        opacity: 1;
      }

      70% {
        left: -1536px;
        opacity: 1;
      }

      72% {
        opacity: 0;
      }

      74% {
        opacity: 0;
      }

      75% {
        left: -2304px;
        opacity: 1;
      }

      95% {
        left: -2304px;
        opacity: 1;
      }

      97% {
        left: -2304px;
        opacity: 0;
      }

      100% {
        left: 0;
        opacity: 0;
      }
    }


    @keyframes slider {
      0% {
        left: 0;
        opacity: 0;
      }

      2% {
        opacity: 1;
      }

      20% {
        left: 0;
        opacity: 1;
      }

      21% {
        opacity: 0;
      }

      24% {
        opacity: 0;
      }

      25% {
        left: -768px;
        opacity: 1;
      }

      45% {
        left: -768px;
        opacity: 1;
      }

      46% {
        opacity: 0;
      }

      48% {
        opacity: 0;
      }

      50% {
        left: -1536px;
        opacity: 1;
      }

      70% {
        left: -1536px;
        opacity: 1;
      }

      72% {
        opacity: 0;
      }

      74% {
        opacity: 0;
      }

      75% {
        left: -2304px;
        opacity: 1;
      }

      95% {
        left: -2304px;
        opacity: 1;
      }

      97% {
        left: -2304px;
        opacity: 0;
      }

      100% {
        left: 0;
        opacity: 0;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">Minat Dan Bakat</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="modal.php">About Us</a></li>
        <li><a href="slide.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li data-toggle="modal" data-target="#mylogin"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
  <center>
    <h2>APLIKASI MINAT DAN BAKAT</h2>
  </center>
  <div class=slider>
    <div class=isi-slider>
      <img src="img/gambar-1.jpg" alt="gambar-1">
      <img src="img/gambar-2.jpg" alt="gambar-2">
      <img src="img/gambar-3.jpg" alt="gambar-3">
    </div>
  </div>
  <!-- Modal daftar -->
  <div id="mydaftar" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">R e g i s t e r</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="text" class="form-control" id="username" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Konfirmasi Password</label>
              <input type="text" class="form-control" id="username" placeholder="Password Harus Sama">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Daftar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal daftar -->

  <!-- Modal login -->
  <div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">L o g i n</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> <!-- End Modal Login -->
  <footer class="footer" style="text-align: center;">
    <p>Copyright &copy; Kelompok 33 <br> Pemograman Web 2020</p>
  </footer>
</body>

</html>