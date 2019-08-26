<?php 
include'config.php';
   

$query = "SELECT * from tbl_guru where gr='' ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("nip" => $row["nip"],
	 "nama_guru" => $row["nama_guru"], "alamat" => $row["alamat"],"no_telp" => $row["no_telp"],"matpel" => $row["matpel"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>