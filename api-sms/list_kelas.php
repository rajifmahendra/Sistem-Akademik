<?php 
include'config.php';
   

$query = "SELECT * from tbl_kelas ORDER BY id_kelas DESC ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_kelas" => $row["id_kelas"],
	 "kode_kelas" => $row["kode_kelas"], "kelas" => $row["kelas"],"sub_kelas" => $row["sub_kelas"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>