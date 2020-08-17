<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<h3 align="left" style="color: red; background-color: blue; padding: 10px"><b><i>Ruang Ongkir</b></i>
	</h3><br>
	<h2 align="center">Register</h2><br>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password1" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Konfirmasi Password</label>
				<input type="password" name="password2" class="form-control">
			</div>
			<button type="submit" name="btnregister" class="btn btn-primary">
				Register
			</button>
			<button class="btn btn-danger">
				Reset
			</button>
		</form>	
		<?php
		if (isset($_POST['btnregister'])) {
			
			$nama = mysql_real_escape_string($_POST['nama']);
			$username = mysql_real_escape_string($_POST['username']);
			$password1 = mysql_real_escape_string($_POST['password1']);
			$password2 = mysql_real_escape_string($_POST['password2']);

			if ($password1 == $password2) {
				mysql_query("INSERT INTO tblogin VALUES('', '$nama', '$username', '$password1')");
				echo "<div class= 'alert alert-success'>Register Sukses. Silahkan Login</div>";
				echo "<meta http-equiv='refresh' content='1.5;url=index.php'>";
			} elseif ($password1 !== $password2) {
				echo "<div class= 'alert alert-danger'>Password Tidak Cocok !!! </div>";
				echo "<meta http-equiv='refresh' content='1;url=register.php'>";
			}
		}
		?>
	</div>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<br><br><br>
</body>
<footer style="background-color: blue; color: white">
	<p align="center">
		Copyright 2019 by M. Nasihul Umam
	</p>
</footer>
</html>