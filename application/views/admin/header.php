<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Espace administrateur</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">T</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url();?>/Home/adminlaunch">Administration</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php  echo date('y/m/d');?>    <a href="<?php echo base_url();?>/Auth/logout" class="btn btn-danger square-btn-adjust">Deconnexion</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                       <a  href="<?php echo site_url();?>/Home/generale"><i class="fa fa-desktop fa-3x"></i>Gestion Générale</a>
                    </li>
                   
                    <li>
                        <a  href="<?php echo site_url();?>/Home/tableV"><i class="fa fa-qrcode fa-3x"></i>Circuit et Itineraire</a>
                    </li>
                      <li>
                        
                    </li>
						   <li  >
                        <a   href="<?php echo site_url();?>/Home/gestiongallery"><i class="fa fa-bar-chart-o fa-3x"></i>Gallery</a>
                    </li>	
                      <li  >
                        <a  href="<?php echo site_url();?>/Home/gestionslide"><i class="fa fa-table fa-3x"></i>Slide</a>
                    </li>
                   					
					                   
                    	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->