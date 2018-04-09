	<!-- //header -->




	<!-- banner -->
	</br>
	<div class="container" style="text-align: justify;">
	<div class="services-heading">
				<div class="agileits-line"> </div>
			</div>

			<h3 style="text-align: center;"></h3>
			<!-- history -->
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
					
						<div class="panel panel-default">
						

							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<span class="glyphicon glyphicon-list" aria-hidden="true"> <?php foreach ($test as $key => $value){
					
									echo $value->nom;
								};?></span> 
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body panel_text">
								<div class="col-md-4 col-sm-4 clo-xs-4">
									
								    <div class="thumbnail">
								   
								    	 <img src="<?php echo base_url();?><?php foreach ($nomphotos as $key => $value) {
									echo $value->nom;
									
								};?>" alt="...">
								  
								   
									
									
								
								      
								    </div>
					
								</div>
								<div class="col-md-8 col-sm-8 "> 
								<?php foreach ($test as $key => $value) {
									
									echo $value->contenu;
								};?>
								 
								
								</div>
								
								</div>
							</div>
						</div>
					
						
					</div>
</div>
</br>
	<div class="feature-grid" style="background:#eff7ae;min-height: 700px;">
		<div class="container">
		<div class="welcome portfolio">
		<div class="container">  
			<h3 style="text-align:center;text-decoration:underline;">Meilleur Destination</h3>  
		</br>
		</sbr>
			<div class="gallery_gds">
				
				<div class="filtr-container">

				<?php foreach ($gethasard as $value) {
				$ret=$this->db->query("select nom from photos_circuit  where id=(select max(id) as id from photos_circuit where id_Scircuit='$value->id')");
				$res=$ret->result();
				$image=null;
				foreach ($res as $row) {
					$image=$row->nom;
				}
				?>
				<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="Busy streets" style="border:solide 1px grey">
					
					<div class="container1">
					  <img src="<?php echo base_url();?><?php echo $image;?>" class="image" alt="...">
					  <div class="middle">
					  		
					    <div class="text">
					    	<span style="font-size:16px;"><?php echo $value->nom;?><span><?php echo anchor("visitez/circuit_detail/{$value->id}", 'Découvrir',['class'=>'btn btn-info']); ?></div>
					  </div>
					</div>
				</div>
						
				

					<?php } ?>
				
					
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
		</div>
	</div>
	</div>
	</div>
	</div>
	




	
	<!-- footer -->

	<!-- //footer -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>	
</html>