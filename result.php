<?php 
	session_start();
	include "koneksi.php"; 
	include "config.php"; 
	include "api-ongkir.php";
		
	//print_r($_SESSION['result']); 
	 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Hasil</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<?php include 'include/head.php'?>
	</head>
<body>
	<?php include "include/header.php" ?>
	</h3><br>
	<h2 align="center"></h2><br>
	<div>
	<table width="300" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
		<tr>
			<td>Dari</td>
			<td>:</td>
			<td><?php print $_SESSION['result']['rajaongkir']['origin_details']['city_name']; ?>, <?php print $_SESSION['result']['rajaongkir']['origin_details']['province']; ?> <?php print $_SESSION['result']['rajaongkir']['origin_details']['postal_code']; ?></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td>:</td>
			<td><?php print $_SESSION['result']['rajaongkir']['destination_details']['city_name']; ?>, <?php print $_SESSION['result']['rajaongkir']['destination_details']['province']; ?> <?php print $_SESSION['result']['rajaongkir']['destination_details']['postal_code']; ?></td>
		</tr>
		<tr>
			<td>Berat</td>
			<td>:</td>
			<td><?php print $_SESSION['result']['rajaongkir']['query']['weight']; ?> Gram</td>
		</tr>
	</table>
	<?php 
	foreach($_SESSION['result']['rajaongkir']['results'] as $key => $value){  
		?>
		<h4><?php print $value['name']; ?></h4>
		<?php 
		foreach($value['costs'] as $keys => $values){
			?>
			<table border="1" width="300" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
				<tr>
					<td>	
						<?php print $values['service']; ?>
						<br/>
						<?php print $values['description']; ?>
						<br/>
						Ongkir:	Rp. <?php print $values['cost'][0]['value']; ?> ,-
						<br/>
						Estimasi: <?php print $values['cost'][0]['etd']; ?> Hari
					</td> 
				</tr>
			</table>
			<?php 
		}
	}
	?>
	<br>
	<a href="cekongkir.php">
			<button class="btn btn-success">
				Kembali
			</button>
	</a>
					
	</div>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include "include/footer.php" ;?>
</html>  