<?php
require_once 'config.php';
$nis = $_GET['nis'];
$sql = "SELECT * from tbl_siswa where nis='$nis' ";
$result = mysqli_query($con, $sql);
$response = array("profil" => array());
while ($row = mysqli_fetch_array($result)) {
	$temp = array("nis" => $row["nis"],"nama_siswa" => $row["nama_siswa"],"kode_kelas" => $row["kode_kelas"],"no_telp" => $row["no_telp"],"alamat" => $row["alamat"],"nip" => $row["nip"],"tmp_lahir" => $row["tmp_lahir"],"tgl_lahir" => $row["tgl_lahir"],"password" => $row["password"],"img_siswa" => $row["img_siswa"]);
	array_push($response["profil"], $temp);
}
$data = json_encode($response);
echo "$data";
?>