<?php
session_start();
if(isset($_POST['hitung'])){
include 'koneksi.php';	 

		mysql_query("INSERT INTO riwayat (id_pngkir, asal, tujuan, berat, kurir) VALUES ('',$_POST['origin'],$_POST['destination'],$_POST['weight'],$_POST['courier'])");
	}
?>