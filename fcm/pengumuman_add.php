<?php

include "koneksi.php";

$judul	= $_POST["judul"];
$isi	= $_POST["isi"];
$tgl	=date("d-m-Y");

if($add = mysqli_query($konek,"INSERT INTO tbl_pengumuman (judul, detail, tgl,img_p) VALUES ('$judul', '$isi', '$tgl','ic_pengumuman.png')")){
	header("Location: http://androidcodelist.com/penilaiansiswa/1/fcm/coba.php?isi='$isi'&judul='$judul'");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
