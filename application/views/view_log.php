<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Log</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	</head>
	<body>
 
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<center><img src="<?php echo base_url();?>assets/img/logo_gabung.png" width="600"></center>
	<center>
				 	<?php if(isset($error)) { 
				 	?>
				 	<div class="alert alert-success"><?php echo $error; ?></div>
				 	<?php
 					 } 
 					?>
 				</center>
	<center><h3>Log history</h3></center><br>
			<?php
			if(count($results)>0)
			{
			?>
			<center><b><p>Approved Attendees</p></b></center>
			<table class="table">
			<center><tr class="text-center"><td>Name</td><td>Track</td><td>Status</td><td>Time</td></tr></center>
			<?php
			 foreach ($results as $val)
			 //var_dump($val);
			 {
			?>
			<tr>
			    <td><?php echo $val['name']; ?></td>
			    <td class='text-center'><?php echo $val['afiliasi']; ?></td>
			    <td class="text-center"><?php echo $val['check_in_status']; ?></td>
			    <td class="text-center"><?php echo $val['time_check_in']; ?></td>
			</tr>
			<?php
			        }
			    ?>
			</table>
			<br><br><center><a href="<?php echo site_url('search/');?>" class="btn btn-success">New Search</a></center>
			<br><br><center><a href="<?php echo site_url('search/');?>" class="btn btn-danger">Add New User</a></center>
			    <?php
			}
			?>
			</div>
		</div>
	</div>
	</body>
</html>