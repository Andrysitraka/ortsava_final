
	<!-- //header -->
	<!-- banner -->
	<?php //var_dump($id_circuit); ?>
	<style>
	#position_btn
	{
		position: absolute;
		left:100px;
	}
	</style>
	<div class="container">
		<div class="services-heading">
		</br>
        <div class="agileits-line"> </div>
      </div>
      
    </div>

	
			<div class="container">
				
				<div class="col-md-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						    <li data-target="#myCarousel" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="<?php echo base_url();?>images/slide/92595a03401c10796.jpg" alt="anadapa">
						      
						    </div>
								<?php foreach ($slides as $row) {?>
								 <div class="item">
									<img src="<?php echo base_url();?><?php echo $row->nom;?>" alt=""/>
								</div>
								<?php } ?>
						  	
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					
					</div>
					
				</div>
				

			</div>
		
			<div class="container" style="text-align: justify;">
				<div class="col-md-12">
			
				

				<?php $i=0;foreach ($circuit as $key => $value) {
				$ret=$this->db->query("select nom from photos_circuit  where id=(select max(id) as id from photos_circuit where id_Scircuit='$value->id')");
				$res=$ret->result();
				$image=null;
				foreach ($res as $row) {
					$image=$row->nom;
				}
					?>
					
					<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading<?php echo $i;?>">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed test<?php echo $i;?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
										<span class="glyphicon glyphicon-list" aria-hidden="true"></span><?php echo $value->nom;?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php echo $i;?>" class="panel-collapse collapse testy<?php echo $i;?>" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
								<div class="panel-body panel_text">
								<div class="col-md-4 col-sm-4 clo-xs-4">
									
								    <div class="thumbnail">
								      <img src="<?php echo base_url();?><?php echo $image;?>" alt="...">
								    </div>
					
								</div>
									<div class="col-md-8 col-sm-8"><p> <?php echo substr($value->contenu,0,500);?>....</br></br></br><?php echo anchor("Mycontroller/circuit_detail/{$value->id}", 'plus d info',['class'=>'btn btn-info'  ]); ?></p>
								</div>
								

								</div>
							</div>
						</div>
				<?php $i++;} ?>
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
			$('.test0').attr("class","pa_italic test0");
			$('.testy0').attr("class","panel-collapse collapse in testy0");
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>	
</html>