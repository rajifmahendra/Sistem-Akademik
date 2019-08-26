<?php 
include'config.php';
   

$query = "SELECT * from tbl_kantor ORDER BY id_kantor DESC ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_kantor" => $row["id_kantor"],
	 "alamat" => $row["alamat"], "telp" => $row["telp"],"lat" => $row["lat"],"long" => $row["long"],"img" => $row["img"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>