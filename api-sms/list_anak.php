<?php 
include'config.php';
   $nio = $_GET['nio'];

$query = "SELECT tbl_siswa.nama_siswa,tbl_siswa.nis,tbl_siswa.kode_kelas,tbl_orangtua.nio from tbl_orangtua join tbl_siswa on tbl_siswa.nis=tbl_orangtua.nis where tbl_orangtua.nio='$nio'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("nama_siswa" => $row["nama_siswa"],
	 "nis" => $row["nis"],"kode_kelas" => $row["kode_kelas"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>