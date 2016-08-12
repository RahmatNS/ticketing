<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Search</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	</head>
	<body>
		<div class="container">
		<br><br><br><br><br>
		<center><img src="<?php echo base_url();?>assets/img/logo_gabung.png" width="600"></center>
		<div class="col-md-6 col-md-offset-3">
			<center><h3>Check in event</h3></center>
			<hr>
			<form action="<?php echo site_url('search/hasil');?>" action="get">
				<div class="form-group">
					<label for="by_name">Type Your Email or Name</label>
					<input type="text" class="form-control" id="by_name" name="keyword" placeholder="email or name">
				</div>
				 <input class="btn btn-primary pull-right" type="submit" value="Search">
				 <br><br>
				 <center>
				 	<?php if(isset($error)) { 
				 	?>
				 	<div class="alert alert-danger"><?php echo $error; ?></div>
				 	<?php
 					 } 
 					?>
 				</center>
			</form>
		</div>
		</div>
	</body>
</html>