<?php include "header.php";?>
		<!-- banner-text -->
		<!-- //banner-text -->    
	</div>
	<!-- //banner --> 
	<!-- tours -->
	<div class="welcome portfolio">
		<div class="container">  
			<h3 class="agileits-title">Our Tours</h3>  
			<div class="gallery_gds">
				<ul class="simplefilter">
					<li class="active" data-filter="all">All</li>
					<li data-filter="1">Category 1</li>
					<li data-filter="2">Category 2</li>
					<li data-filter="3">Category 3</li>
				</ul>
				<div class="filtr-container">
					<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="images/img1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img class="img-responsive  " src="images/img1.jpg" alt=""  /> 
							</a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="2, 3" data-sort="Luminous night">
						<div class="agileits-img">
							<a href="images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g2.jpg" alt="" class="img-responsive" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="City wonders">
						<div class="agileits-img">
							<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g3.jpg" alt="" class="img-responsive  " />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="3" data-sort="Industrial site">
						<div class="agileits-img">
							<a href="images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
								<img src="images/g4.jpg" alt="" class="img-responsive " />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="3" data-sort="In production">
						<div class="agileits-img">
							<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g5.jpg" alt="" class="img-responsive  " />
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/img2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/img2.jpg" alt="" class="img-responsive  " />
							</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //tours --> 
	<!-- slid -->
	<div class="slid">
		<div class="container">
			<h4>Today Special</h4> 
			<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis. Etiam id enim sem. Suspendisse commodo tempor magna </p>
		</div> 
	</div>
	<!-- //slid -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<h3 class="agileits-title">Newsletter</h3>
			<p>Mauris est odio laoreet laoreet sapien non, sollicitudin bibendum nulla amet purus sodales blandit.</p>
			<form action="#" method="post"> 
				<input type="text" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Subscribe">
				<div class="clearfix"> </div> 
			</form> 
		</div> 
	</div>
	<!-- //newsletter -->
	<?php include "footer.php";?>
	<!-- //footer end here -->  
	<script src="js/jquery.filterizr.js"></script>  
	<script src="js/controls.js"></script>
	<!-- Kick off Filterizr -->
	<script type="text/javascript">
		$(function() {
			//Initialize filterizr with default options
			$('.filtr-container').filterizr();
		});
	</script>	
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script> 
	<!-- //swipe box js --> 	
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>