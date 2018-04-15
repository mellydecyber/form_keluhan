<!DOCTYPE html>
<html>
<head>
	<title>Keluhan</title>
	
<link rel="stylesheet" type="text/css" href="admin/assets/css/form.css">
<!-- bootstrap css -->
<link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="admin/assets/jquery/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="admin/assets/jquery/bootstrap.min.js"></script>

	<?php 
    include 'admin/koneksi.php'; 
	if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'> <font color='red'> Login Gagal !! Username dan Password Salah !!</font></div>";
            }
        }
        ?>
</head>
<body>	
  
  <div class="inner-container">     
    <div class="box">
	
     <h1>Selamat Datang</h1>
	   <style>
		.btn-success{margin: 10px;}
		</style>
	<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#FormKeluhan">
	    Form Keluhan
	</button>      
   <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

    </div>
  </div>
</div>
<!-------->
<div class="modal fade" id="FormKeluhan" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Form Keluhan</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="formAjax">
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" placeholder="Masukkan Alamat Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="inputNo">No Hp</label>
                        <input type="text" class="form-control" id="inputNo" placeholder="Masukkan No Hp Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Masukkan email Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="inputKeluhan">Keluhan</label>
                        <textarea class="form-control" id="inputKeluhan" placeholder="Masukkan Keluhan Anda"></textarea>
                    </div>
                </form>
            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimKeluhan()">KIRIM</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form action="login_act.php" method="post" role="form">
            <div class="form-group">
              <label for="uname">Username</label>
               <input type="text" class="form-control" placeholder="Username" name="uname"/>
            </div>
            <div class="form-group">
              <label for="pass"> Password</label>
              <input  type="password" class="form-control" placeholder="Password" name="pass"/>
            </div>
              <button>Login</button>


          </form>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<script>
function kirimKeluhan(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var nama = $('#inputNama').val();
    var alamat = $('#inputAlamat').val();
    var no_hp = $('#inputNo').val();
    var email = $('#inputEmail').val();
    var keluhan = $('#inputKeluhan').val();
    if(nama.trim() == '' ){
		alert('Masukkan nama Anda.');
        $('#inputNama').focus();
		return false;
    }else if(alamat.trim() == '' ){
        alert('Masukkan Alamat Anda.');
        $('#inputAlamat').focus();
        return false;
    }else if(no_hp.trim() == '' ){
        alert('Masukkan No Hp Anda.');
        $('#inputNo').focus();
        return false;
	}else if(email.trim() == '' ){
		alert('Masukkan email Anda.');
        $('#inputEmail').focus();
		return false;
	}else if(keluhan.trim() == '' ){
		alert('Masukkan Keluhan Anda.');
        $('#inputKeluhan').focus();
		return false;
	}else{
        $.ajax({
            type:'POST',
            url:'proses.php',
            data:"snama="+ nama +"& salamat="+ alamat +"& sno="+ no_hp +"& semail="+ email +"& skeluhan="+ keluhan,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(){
                    $('#inputNama').val('');
                   $('#inputAlamat').val('');
                    $('#inputNo').val('');
                    $('#inputEmail').val('');
                    $('#inputKeluhan').val('');
                    $('.statusMsg').html('<span style="color:green;">Terima kasih telah menghubungi kami.</p>');
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>
</body>
</html>