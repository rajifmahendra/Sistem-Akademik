<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'con.php';
	createNilai();
}

function createNilai() {
	global $connect;
	$id_nfc = $_POST["id_nfc"];
	$nik = $_POST["nik"];
	$nama = $_POST["namal"];
	$alamat = $_POST["alamat"];
	$password = $_POST["password"];
$saldo = $_POST["saldo"];
	$query = "Insert into tbl_nfc
	(id_nfc,nik,nama,alamat,password,saldo) values ('$id_nfc','$nik','$nama','$alamat','$password','$saldo');";

	mysqli_query($connect, $query) or die(mysqli_error($connect));
	mysqli_close($connect);

}
?>