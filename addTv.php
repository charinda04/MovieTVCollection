<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<?php include "navbar.php"; ?>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
		
		
	
	<form action="addMoviePhp.php" method="POST" accept-charset="utf-8">

		<div class="row">
			<div class="col-sm">
				<div class="form-group">
				<label>Name</label><br>
				<input type="text" name="name"><br>
				</div>

				<div class="form-group">
					<label>Genre</label><br>
					<input type="text" name="genre"><br>
				</div>

				<div class="form-group">
					<label>Year</label><br>
					<input type="text" name="year"><br>
				</div>

				<div class="form-group">
				<label>Length</label><br>
				<input type="text" name="length"><br>
				</div>

				<div class="form-group">
				<label>IMDB Rating</label><br>
				<input type="text" name="IMDB Rating"><br>
				</div>

				<div class="form-group">
				<label>Rotton Tomato Rating</label><br>
				<input type="text" name="Rotton Tomato Rating"><br>
				</div>
			</div>
			<div class="col-sm">
				<div class="form-group">
				<label>Director</label><br>
				<input type="text" name="Director"><br>
				</div>

				<div class="form-group">
				<label>Cast</label><br>
				<input type="text" name="Cast"><br>
				</div>

				<div class="form-group">
				<label>Description</label><br>
				<input type="text" name="Description"><br>
				</div>

				<div class="form-group">
				<label>Photo</label><br>
				<input type="text" name="Photo"><br>
				</div>

				<div class="form-group">
				<label>Trailer</label><br>
				<input type="text" name="Trailer"><br>
				</div>

				<div class="form-group">
				<label>Subtitle</label><br>
				<input type="text" name="Subtitle"><br>
				</div>



			</div>
			
		</div>
		
		

		


		<button type="submit">Submit</button>
		<button type="reset">Reset</button>


	</form>
	</div>




	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>