<?php 
	include "koneksi.php";
	session_start(); include 'ceksession.php'; 
	include "config.php"; 
	include "api-ongkir.php";
	 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ruangongkir| Selamat Datang</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<?php include 'include/head.php'?>
		<?php include "include/header.php" ?>
	</head>
	</h3><br><br>
<body style="background-image: url('images/background.png');">
	<style type="text/css">
		h1 {
			color: white; font-size: 55px;
		}
		h3 {
			color: white; font-size: 30px;
		}
	</style>
<div align="center"><br><br>
		<H1><b>Selamat Datang</b></H1>	
		<h3><?php  echo $_SESSION['username']; ?></h3>
	</style>
	</div>		

</body><br><br><br><br><br><br><br><br><br><br>
<?php include "include/footer.php" ; ?>
</html>