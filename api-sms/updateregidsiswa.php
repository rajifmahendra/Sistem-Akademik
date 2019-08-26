<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'config.php';
	createNilai();
}

function createNilai() {
	global $con;
	$nis =$_POST["nis"];
	
		$regid = $_POST["reg_id"];
		

	$query = "UPDATE tbl_siswa SET reg_id='$regid' WHERE nis = '$nis'";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>