<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'config.php';
	createNilai();
}

function createNilai() {
	global $con;

	$nip = $_POST["nip"];
		$tgl_nilai = $_POST["tgl_nilai"];
			$url_audio = $_POST["url_audio"];
	$nis = $_POST["nis"];
	$kode_mapel = $_POST["kode_mapel"];
	$nilai_uh = $_POST["nilai_uh"];
	$nilai_tugas = $_POST["nilai_tugas"];
	$nilai_uts = $_POST["nilai_uts"];
	$nilai_uas = $_POST["nilai_uas"];
	$nilai_akhir = $_POST["nilai_akhir"];
	$img_nilai = $_POST["img_nilai"];
	$query = "Insert into tbl_detail_nilai
	(nip,nis,kode_mapel,nilai_uh,nilai_tugas,nilai_uts,nilai_uas,nilai_akhir,img_nilai,url_audio,tgl_nilai) values ('$nip','$nis','$kode_mapel','$nilai_uh','$nilai_tugas','$nilai_uts','$nilai_uas','$nilai_akhir','$img_nilai','$url_audio','$tgl_nilai');";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>