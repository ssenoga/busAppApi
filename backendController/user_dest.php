<?php require "./includes/header.php";?>
<div class="container-mainpage down">
	<div class="heading">Please fill in the form below</div>

	<form action="" method="POST">
		<div class="form-group">
			<label>Destination</label>
			<?php require './content_scripts/select_dest.php';?>
		</div>
		<div class="form-group">
			<label>Currect Location</label>
			<?php require './content_scripts/select_location.php';?>
		</div>
		<button class="btn-nxt" type="submit" name="submit">Next</button>
		
	</form>

</div>