<!-- banner-text -->
	<!-- //banner --> 
	<!-- contact -->
	<div class="slid">
	<div class="welcome contact">
		<div class="container">  
			<span style="color:#aebe27;font-size:24px;font-familly:times">Nous Contactez</span> 
			</br>  
			<div class="contact-w3ls-row">
				<form action="#" method="post">
					<input type="text" name="First Name" placeholder="Nom" required="">
					<input class="email" name="Last Name" type="text" placeholder="Prénom" required="">
					<input type="text" name="Number" placeholder="Numero" required="">
					<input class="email" name="Email" type="text" placeholder="Email" required="">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Envoyer">
				</form>
			</div>  
		</div>
	</div>
</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30933.015836689356!2d50.12894360246202!3d-14.27496316449564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x223df1bb7c7769a5%3A0x641d1abac2327ba8!2sSambava%2C+Madagascar!5e0!3m2!1sfr!2sfr!4v1509017439636" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //map -->  
	<!-- slid -->
	<div class="slid">
		<div class="container">
			<h4></h4> 
			<p> </p>
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
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>
</body>
</html>