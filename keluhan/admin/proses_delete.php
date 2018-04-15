<?php
$no = $_POST['no'];
include "koneksi.php";
$sql = "delete from tbl_keluhan where no=".$no;
	$query	= $con->query($sql);
if($query==true){
echo'<meta http-equiv="refresh" content="0; url=index.php">';
}
?>