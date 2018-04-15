<!doctype html>
<html lang="en">
<head>
<?php 
	session_start();
	include 'cek.php';
	include 'koneksi.php';
	?>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Keluhan</title>

	
 
 
    

</head>
<body>


   
<div class="inner-container">     
    
    
        <div class="sidebar-wrapper">
            <div class="logo">
                
            </div>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-

toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="dashboard.php">
                    <h3><?php echo $_SESSION['uname']  ?></h3>
                </a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        
                        
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator 

hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        





		
		
