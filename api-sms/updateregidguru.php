<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'config.php';
	createNilai();
}

function createNilai() {
	global $con;
	$nip =$_POST["nip"];
	
		$regid = $_POST["reg_id"];
		

	$query = "UPDATE tbl_guru SET reg_id='$regid' WHERE nip = '$nip'";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>