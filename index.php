<?php include 'koneksi.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<h3 align="left" style="color: red; background-color: blue; padding: 10px"><b><i>Ruang Ongkir</b></i>
	</h3><br>
	<h2 align="center">LOGIN</h2><br>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control">
			</div><br>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary" name="btnlogin" style="float: left;
			margin-right: 20px;">
				Login
			</button>
		</form>
		<a href="register.php">
			<button class="btn btn-success">
				Register
			</button>
		</a>
		<?php

		if (isset($_POST['btnlogin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$ceklogin = mysql_query("SELECT * FROM tblogin WHERE username ='$username' AND password ='$password'");

			if (mysql_num_rows($ceklogin) > 0) {
				$_SESSION['username'] = $username;

				echo "<div class='alert alert-success'>Login Sukses</div>";
				echo "<meta http-equiv='refresh' content='1;url=home.php'>";
			} else {
				echo "<div class='alert alert-danger'>Login Gagal!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php'>";
			}
		}

		?>
	</div>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<br><br><br><br><br><br><br><br><br>
</body>
<footer style="background-color: blue; color: white">
	<p align="center">
		Copyright 2019 by M. Nasihul Umam
	</p>
</footer>
</html>