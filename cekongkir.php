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
		<title>Ruang Ongkir</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<?php include 'include/head.php'?>
		<?php include "include/header.php" ?>
	</head>
<body>
	</h3><br>
	<h2 align="center">Cek Ongkir</h2><br>
	<div class="container">
	<form method="POST" action="proses.php?form=submit&action=hitung">
		<p>Pastikan Koneksi Internet Anda Terhubung</p>
	<table style="width:100%;border-collapse:collapse;" cellpadding="5" cellspacing="5" border="0" > 
		<tr>
			<td width="200">Lokasi Asal</td>
			<td width="1">:</td>
			<td>
				<select size="1" name="origin" class="form-control">
					<option value="">Pilih Kota Asal</option>
					<?php 
					$sqlk="SELECT * FROM kabupaten ORDER BY kabNama ASC";
					$queryk = mysql_query($sqlk);
					while($datak=mysql_fetch_array($queryk)){
						?>
						<option value="<?php print $datak['kabKode']; ?>"><?php print $datak['kabNama']; ?></option>
						<?php 
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td >Lokasi Tujuan</td>
			<td >:</td>
			<td>
				<select size="1"  name="destination" class="form-control">
					<option value="">Pilih Kota Tujuan</option>
					<?php 
					$sqlk="SELECT * FROM kabupaten ORDER BY kabNama ASC";
					$queryk = mysql_query($sqlk);
					while($datak=mysql_fetch_array($queryk)){
						?>
						<option value="<?php print $datak['kabKode']; ?>"><?php print $datak['kabNama']; ?></option>
						<?php 
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td >Berat Produk (gram)</td>
			<td >:</td>
			<td>
				<input type="text" name="weight" class="form-control" />
			</td>
		</tr> 
		<tr>
			<td >Kurir</td>
			<td >:</td>
			<td>
				<select size="1"  name="courier" class="form-control">
					<option value="">Pilih Kurir</option>
					<option value="jne">JNE</option>
					<option value="tiki">TIKI</option>
					<option value="pos">POS</option> 
				</select>
			</td>
		</tr>
		<tr>
			<td ></td>
			<td ></td>
			<td>
				<input type="submit" value="Hitung" name="hitung" class="btn btn-success" />
			</td>
		</tr> 
	</table> 
</form>
</div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include "include/footer.php" ; ?>
</html>  

