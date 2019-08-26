<?php 
include'config.php';
   
 $kode_kelas=$_GET['kode_kelas'];  
  $hari=$_GET['hari'];
$query = "SELECT tbl_detail_jadwal.id_jadwal,tbl_detail_jadwal.img_jadwal,tbl_detail_jadwal.hari,tbl_guru.nama_guru,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel,tbl_detail_jadwal.jam_mulai,tbl_detail_jadwal.jam_selesai FROM tbl_detail_jadwal JOIN tbl_guru ON tbl_guru.nip=tbl_detail_jadwal.nip JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel WHERE tbl_detail_jadwal.kode_kelas='$kode_kelas' and tbl_detail_jadwal.hari='$hari' order by tbl_detail_jadwal.id_jadwal asc";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

	$temp = array("id_jadwal" => $row["id_jadwal"],"nis" => $row["nis"],"nama_guru" => $row["nama_guru"], "kelas" => $row["kelas"], "sub_kelas" => $row["sub_kelas"], "mapel" => $row["mapel"], "hari" => $row["hari"], "jam_selesai" => $row["jam_mulai"], "jam_mulai" => $row["jam_selesai"], "img_jadwal" => $row["img_jadwal"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>