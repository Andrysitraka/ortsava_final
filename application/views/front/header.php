<!DOCTYPE html>
<html lang="en">
<head>
<title>Tourisme-SAVA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link rel="icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
<link href="<?php echo base_url();?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet" media="all">   
<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" media="all" property="" />   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url();?>js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href='<?php echo base_url();?>//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>//fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner -->
	<div class="banner">
			<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="<?php echo site_url();?>/visitez/index" style="color:#aebe27">Tourisme<span> SAVA</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="<?php echo site_url();?>/visitez/index" class="w3ls-hover active">Accuiel</a></li>
							<li><a href="<?php echo site_url();?>/visitez/apropos" class="btn w3ls-hover">Apropos</a></li>   
							
							<li><a href="#" class="dropdown-toggle btn w3ls-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destination <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php 
								$query="SELECT id,nom FROM circuit order by nom"; 
								$query=$this->db->query($query);
								$result=$query->result();
								foreach ($result as $row) {?>
									<li>
										<a class="hvr-sweep-to-bottom" href="<?php echo site_url();?>/visitez/circuit/<?php echo $row->id;?>">
										<?php echo $row->nom;?>
										</a>
									</li>
								<?php } ?>   
								</ul>
							</li>  
							<li><a href="<?php echo site_url();?>/visitez/contact" class="btn w3ls-hover">Contact</a></li>
						</ul>	   
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	