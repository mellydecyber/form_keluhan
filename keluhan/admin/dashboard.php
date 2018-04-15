<?php
include "desain/header.php";
?>


                        
       
<center>
  <div class="container">
        
        <h1>Keluhan</h1>
        
        <table border="0">
            
                <tr>
                    <th weight="10%">NO.</th>
                    <th weight="45px">NAMA LENGKAP</th>
                    <th weight="45px">AKSI</th>
                </tr>
           
                <?php
                include "koneksi.php";
                
              $no = 1;
                $query = $con->query("SELECT * FROM tbl_keluhan ORDER BY nama ASC");
             
                if($query->num_rows){
                      
                    while($row = $query->fetch_assoc()){
                 
                        echo '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['nama'].'</td>
                            <td>
                                <button type="button" class="view_data btn btn-primary btn-xs" data-toggle="modal" id="'.$row['id'].'" data-target="#myModal">Detail</button>
                            </td>
                        </tr>
                        ';
            
                       $no++; 
                    }
                }
                ?>
            
        </table>
       
    </div>
    
              <br>
              <br>
              <br>
              <br>
              <br>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Data Keluhan</h4>
                </div>
               
                <div class="modal-body" id="data_keluhan">
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<script src="assets/jquery/jquery.min.js"></script>

<script src="assets/jquery/bootstrap.min.js"></script>
  <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

      <!-- Bootstrap core CSS     -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <script>
   
    $(document).ready(function(){
       
        $('.view_data').click(function(){
           
            var id = $(this).attr("id");
          
            $.ajax({
                url: 'view.php',  
                method: 'post',  
                data: {id:id},   
                success:function(data){    
                    $('#data_keluhan').html(data);  
                    $('#myModal').modal("show");                    }
            });
        });
    });
    </script>
             <?php
include "desain/footer.php";
?>