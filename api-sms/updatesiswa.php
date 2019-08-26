<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'config.php';
	createNilai();
}

function createNilai() {
	global $con;
	$nis = mysqli_real_escape_string($con, $_POST["nis"]);
		$no_telp = mysqli_real_escape_string($con, $_POST["no_telp"]);
			$password = mysqli_real_escape_string($con, $_POST["password"]);
		

	$query = "UPDATE tbl_siswa SET no_telp='$no_telp',password= '$password' WHERE nis = '$nis'";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>