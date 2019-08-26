<?php
require_once 'config.php';
$id_nfc = $_GET['id_nfc'];
$sql = "SELECT * from tbl_nfc where id_nfc='$id_nfc' ";
$result = mysqli_query($con, $sql);
$response = array("profil" => array());
while ($row = mysqli_fetch_array($result)) {
	$temp = array("nama" => $row["nama"],"alamat" => $row["alamat"],"saldo" => $row["saldo"]);
	array_push($response["profil"], $temp);
}
$data = json_encode($response);
echo "$data";
?>