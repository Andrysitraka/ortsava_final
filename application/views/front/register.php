<div class="container">

		<div class="row">
			<div class="col-md-12"><h1 style="text-align: center;font-family: times;font-size: 22px;">Inscrivez vous ici</h1></div>
			
		</div>

		<div class="row">
			<div class="col-md-4 col-ms-4">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
			<?php if (isset($_SESSION['success'])) {?>
				<div  class="alert alert-success"> <?php echo $_SESSION['success'] ;?></div> 
			<?php }?>
			<form action="" method="POST">
					<div class="form-group">
						<label for="username">Username:</label>
						<input class="form-control" type="text" name="username" id="username">

					</div>
					<div class="form-group">
						<label for="username">Email:</label>
						<input class="form-control" type="text" name="email" id="username">

					</div>

					<div class="form-group">
						<label for="username">Password:</label>
						<input class="form-control" type="password" name="password" id="username">

					</div>

					<div class="form-group">
						<label  for="username">Confirmet Password:</label>
						<input class="form-control" type="password" name="password2" id="username">

					</div>


					<div class="form-group">
						<label for="username">Genre:</label>
						<select class="form-control" id="genre" name="genre">
							<option value="mascu">Homme</option>
							<option value="femin">Femme</option>

							
						</select>

					</div>


					<div class="form-group">
						<label for="username">Phone</label>
						<input class="form-control" type="text" name="phone" id="phone">

					</div>

					<div class="text-center">

					<button class="btn btn-primary" name="save">Enregistrer</button>
					</div>


				</form>
						

</div>

			</div>
			
		</div>
</div>