<?php 
include'config.php';
   
 $nip=$_GET['nip'];  
$query = "SELECT tbl_detail_jadwal.kode_kelas,tbl_detail_jadwal.nip,tbl_detail_jadwal.hari,tbl_detail_jadwal.jam_mulai,tbl_detail_jadwal.jam_selesai,tbl_detail_jadwal.kode_mapel,tbl_kelas.kelas,tbl_mapel.mapel FROM tbl_detail_jadwal JOIN tbl_mapel on tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel JOIN tbl_kelas on tbl_detail_jadwal.kode_kelas=tbl_kelas.kode_kelas WHERE tbl_detail_jadwal.nip='$nip' ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("kode_mapel" => $row["kode_mapel"],
	 "kode_kelas" => $row["kode_kelas"], "kelas" => $row["kelas"], "hari" => $row["hari"],"mapel" => $row["mapel"],"jam_selesai" => $row["jam_mulai"],"jam_mulai" => $row["jam_selesai"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>