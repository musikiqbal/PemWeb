<!DOCTYPE html>
<html>
<head>
	<!-- bagian head hanya untuk import css dan javascript -->
	<title>SPK_penentu_jurusan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/risol.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid"> <!-- container-fluid:class yang disediakan bootstrap untuk membuat konten full layout -->
	<nav class="navbar navbar-default"> 
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand navbar-link" href="index.php?page=home">SPK-SMA</a> 
			</div>
			<div class="navbar-collapse">
				<UL class="nav navbar-nav navbar-right" >
					<li ><a href="index.php?halaman=home"> | Home</a></li>
					<li ><a href="index.php?halaman=about"> | About</a></li>
				</UL>
			</div>
		</div>
	</nav>
</div>
<!-- ============== BODY ============ -->
<!-- pemilihan halaman dengan metode get ,misal http://localhost/spK-penentu_jurusan/index.php?halaman=about ,maka halaman yang dipanggil adalah about -->
<?php 
switch (@$_GET['halaman']) {
	case 'home':
		include"home.php";
		break;
	case 'about':
		include"about.php";
		break;
	case 'nilai':
		include"data_diri.php";
		break;
	case 'input_nilai':
		include"form_nilai.php";
		break;
	case 'proses':
		include"proses.php";
		break;
	case 'dataku':
		include"dataku.php";
		break;
	default:
		include"home.php";
		break;
}


 ?>
<!-- ============== BODY ============ -->

</body>
</html>