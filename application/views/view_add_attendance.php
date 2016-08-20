<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add attendance</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	</head>
	<body>
		<div class="container">
		<br><br>
		<center><img src="<?php echo base_url();?>assets/img/logo_gabung.png" width="600"></center>
		<div class="col-md-6 col-md-offset-3">
			<center><h3>ADD ATTENDANCE</h3></center>
			<hr>
			<?php echo form_open("add_attendance/add"); ?>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="name">
					<br>
					<label for="afiliasi">Affiliation</label>
					<input type="text" class="form-control" id="afiliasi" name="afiliasi" placeholder="affiliation">
					<br>
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="email">
				</div>
				<input class="btn btn-primary pull-right" type="submit" value="Add">
			<?php echo form_close(); ?>
		</div>
		</div>
	</body>
</html>