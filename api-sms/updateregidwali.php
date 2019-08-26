<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'config.php';
	createNilai();
}

function createNilai() {
	global $con;
	$nio =$_POST["nio"];
	
		$regid = $_POST["reg_id"];
		

	$query = "UPDATE tbl_orangtua SET reg_id='$regid' WHERE nio = '$nio'";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>