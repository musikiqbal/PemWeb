<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>
<style>
  body {
    background-color: #f9f9f9;
    font-size: 16px;
    color: #444;
    font-family: sans-serif;
  }

  .content {
    width: 80%;
    margin: 10px auto;
  }

  /*header*/
  header {
    background-color: white;
    padding: 20px 10px;
    border-radius: 5px;
    border: 1px solid #f0f0f0;
    margin-bottom: 10px;
  }

  header h1.judul,
  header h3.deskripsi {
    text-align: center;
  }

  /*menu navigasi*/
  .menu {
    background-color: #87CEFA;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  div.menu ul {
    list-style: none;
    overflow: hidden;
  }


  div.menu ul li {
    float: left;
    text-transform: uppercase;
  }

  div.menu ul li a {
    display: block;
    padding: 0 20px;
    text-decoration: none;
    color: #2c2c2c;
    font-family: sans-serif;
    font-size: 13px;
    font-weight: 400;
    transition: all 0.3s ease-in-out;
  }

  div.menu ul li a:hover,
  div.menu ul li a.hoverover {
    cursor: pointer;
    color: #fff;
  }


  div.badan {
    background-color: white;
    border-radius: 5px;
    border: 1px solid #f0f0f0;
    margin-bottom: 10px;
  }

  div.halaman {
    text-align: center;
    padding: 30px 20px;
  }
</style>

<body>
  <div class="content">
    <header>
      <h1 class="judul">HOME</h1>
    </header>

    <div class="menu">
      <ul>
        <li><a href="data user.php">Data User</a></li>
        <li><a href="cek prediksi.php">Cek Prediksi</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</body>

</html>