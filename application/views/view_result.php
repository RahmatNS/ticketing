<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Result</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	</head>
	<body>
 
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<center><img src="<?php echo base_url();?>assets/img/logo_gabung.png" width="600"></center>
	<center><h3>Search Results</h3></center><br>
			<?php
			if(count($results)>0)
			{
			?>
			<center><b><p>Please find your name and print your ticket</p></b></center>
			<table class="table">
			<center><tr class="text-center"><td>Name</td><td>Affiliation</td><td>Action</td></tr></center>
			<?php
			 foreach ($results as $val)
			 //var_dump($val);
			 {
			?>
			<tr>
			    <td><?php echo $val['name']; ?></td>
			    <td class='text-center'><?php echo $val['afiliasi']; ?></td>
			    <?php 
			    if ($val['check_in_status'] == "Approved")
			    {
			   	?>
			   	<td class="text-center"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></td>
			   	<?php
			    }
			    else {
			    ?>
			    <td class="text-center"><a href="<?php echo site_url('print_ticket/index/' . $val['no']);?>" class="btn btn-info" target="_blank">Print</a></td>
			    <?php
			    }
			    ?>
			    
			</tr>
			<?php
			        }
			    ?>
			</table>
			<br><br><center><a href="<?php echo site_url('search/');?>" class="btn btn-success">New Search</a></center>
			    <?php
			}
			else
			{

				echo "<center>Data not found</center>";
				?>
				<br><br><center><a href="<?php echo site_url('search/');?>" class="btn btn-danger">Back</a></center>
				<?php
			}

			?>
			</div>
		</div>
	</div>
	</body>
</html>