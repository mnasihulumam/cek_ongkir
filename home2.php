<?php include 'koneksi.php'; session_start(); include 'ceksession.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<header>
		<div class="main">
			<ul>
			<li><a href="#"> Home</a></li>
			<li><a href="cekongkir.php"> Cek Ongkir</a></li>
			<li><a href="#"> Kurir</a></li>
			<li><a href="#"> Riwayat</a></li>
			<li><a href="#">Tentang</a></li>
			<li><a href="logout.php" onclick="return confirm('Yakin Ingin Logout?')">Logout</a></li>
			</ul>
		</div>
	</header>
</head>
<body>
	<div>
		<H1>Selamat Datang</H1>	
		<?php  echo $_SESSION['username']; ?>
	</div>		
	
</body>
</html>