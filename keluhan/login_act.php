<?php 
session_start();
include 'admin/koneksi.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);

	$sql = "select * from admin where username='$uname' and password='$pas'";
	$query	= $con->query($sql);


if(mysqli_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:admin/dashboard.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pass;
 ?>