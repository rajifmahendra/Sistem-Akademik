<?php 
include'config.php';
   

$query = "SELECT * from tbl_ket_kantor ORDER BY id_ket DESC ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_ket" => $row["id_ket"],
	 "nama_kantor" => $row["nama_kantor"],"alamat" => $row["alamat"], "no_telp" => $row["no_telp"],"deskripsi" => $row["deskripsi"],"jam_buka" => $row["jam_buka"],"img_ket" => $row["img_ket"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>