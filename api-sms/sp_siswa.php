<?php 
require_once 'config.php';
$nip = $_GET['nip'];
$kode_kelas = $_GET['kode_kelas'];
$kode_mapel = $_GET['kode_mapel'];
$query = "SELECT * from tbl_siswa where kode_kelas='$kode_kelas' order by nis asc";
$result = mysqli_query($con, $query);
$arr = array("result"=> array());
while ($row = mysqli_fetch_array($result)) {

	$temp = array("nis" => $row["nis"],"nama_siswa" => $row["nama_siswa"]);

	array_push($arr["result"], $temp);
}

$data = json_encode($arr);
echo "$data";
?>