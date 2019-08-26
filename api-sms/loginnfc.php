<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$id_nfc = $_POST['id_nfc'];
$password = $_POST['password'];
$sql = "SELECT * FROM tbl_nfc WHERE id_nfc='$id_nfc' AND password='$password'";

require_once('config.php');
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo "success";
}else{
echo "failure";
}
mysqli_close($con);
}
?>