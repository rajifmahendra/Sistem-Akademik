<?php
	
$konek = mysqli_connect("localhost", "usernamedatabase", "passworddatabase", "namadatabase");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>