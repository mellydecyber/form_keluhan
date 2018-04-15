<?php
include "admin/koneksi.php";
$nama = $_POST['snama'];
$alamat = $_POST['salamat'];
$no_hp = $_POST['sno'];
$email = $_POST['semail'];
$keluhan = $_POST['skeluhan'];


$sql = "INSERT INTO tbl_keluhan (nama, alamat, no_hp, email, keluhan) VALUES('$nama','$alamat','$no_hp','$email','$keluhan')";
	$input = mysqli_query($con,$sql);
	
if($input){
	echo 'Success';
}else{
	echo 'Error';
}
?>