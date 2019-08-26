<?php 
include'config.php';
   
 $nip=$_GET['nip'];  
   $hari=$_GET['hari'];
$query = "SELECT tbl_detail_jadwal.id_jadwal,tbl_detail_jadwal.img_jadwal,tbl_detail_jadwal.hari,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel,tbl_detail_jadwal.jam_mulai,tbl_detail_jadwal.jam_selesai FROM tbl_detail_jadwal JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel WHERE tbl_detail_jadwal.nip='$nip' and tbl_detail_jadwal.hari='$hari'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

	$temp = array("id_jadwal" => $row["id_jadwal"],"nama_siswa" => $row["nama_siswa"],"kelas" => $row["kelas"], "sub_kelas" => $row["sub_kelas"], "mapel" => $row["mapel"],"hari" => $row["hari"], "jam_selesai" => $row["jam_mulai"], "jam_mulai" => $row["jam_selesai"], "img_jadwal" => $row["img_jadwal"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>