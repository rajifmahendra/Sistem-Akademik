<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'config.php';
	createAbsensi();
}

function createAbsensi() {
	global $con;
	$nip = $_POST["nip"];
	$nis = $_POST["nis"];
	$kode_mapel = $_POST["kode_mapel"];
	$status = $_POST["status"];

	$query = "Insert into tbl_absensi(nip,nis,kode_mapel,status) values ('$nip','$nis','$kode_mapel','$status');";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>