<?php
//memasukkan koneksi database
require_once("koneksi.php");
 
//jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
if($_POST['id']){
	//membuat variabel id berisi post['id']
	$id = $_POST['id'];
	//query standart select where id
	$view = $con->query("SELECT * FROM tbl_keluhan WHERE id='$id'");
	//jika ada datanya
	if($view->num_rows){
		//fetch data ke dalam veriabel $row_view
		$row = $view->fetch_assoc();
		//menampilkan data dengan table
		echo '
		<p>Berikut ini adalah detail dari Keluhan Pelanggan <b>'.$row['nama'].'</b></p>
		<table class="table table-bordered">
			<tr>
				<th>NAMA</th>
				<td>'.$row['nama'].'</td>
			</tr>
			<tr>
				<th>ALAMAT</th>
				<td>'.$row['alamat'].'</td>
			</tr>
			<tr>
				<th>No Hp</th>
				<td>'.$row['no_hp'].'</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>'.$row['email'].'</td>
			</tr>
			<tr>
				<th>Keluhan</th>
				<td><textarea>'.$row['keluhan'].'</textarea></td>
			</tr>
		</table>
		';
	}
}
?>