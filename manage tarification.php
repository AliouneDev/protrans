<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php include('partial/menu.php');?>

	<div class="main-content">
		<div class="wrapper">
			<h1>Manage Tarification</h1>
			<br/><br/>
			<?php
				if (isset($_SESSION['add'])) {
					echo $_SESSION['add'];
					unset($_SESSION['add']);
				}

				if (isset($_SESSION['remove'])) {
					echo $_SESSION['remove'];
					unset($_SESSION['remove']);
				}
				if (isset($_SESSION['delete'])) {
					echo $_SESSION['delete'];
					unset($_SESSION['delete']);
				}

			?>
			<br/><br/>

			<a href="<?php echo SITEURL;?>admin/add tarification.php" class="btn-primary">Add Tarification</a>
					<br/><br/>
					<table class="table">
						<tr>
							<th>Serial Number</th>
							<th>Marque</th>
							<th>Tatif Horaire</th>
							<th>Tarif Jour</th>
							<th>Location</th>
							<th>Details</th>
							<th>Images</th>
							<th>Featured</th>
							<th>Active</th>
							
						</tr>
						<?php

							$sql="SELECT * FROM tbl_tarification ";
							$res=mysqli_query($conn,$sql);
						if ($res==TRUE) 
							$count=mysqli_num_rows($res);
							$sn=1;  
							if ($count>0) {
								# code...
								while ($row=mysqli_fetch_assoc(($res))) {
									# code...
									$id=$row['id'];
									$marque=$row['marque'];
									$tarif_horaire=$row['tarif_horaire'];
									$tarif_jour=$row['tarif_jour'];
									$location=$row['location'];
									$details=$row['details'];
                                    $image_name=$row['image_name'];
									$featured=$row['featured'];
									$active=$row['active'];
									
									?>
								<tr>
										<td><?php echo $sn++?></td>
										<td><?php echo $marque ;?></td>
										<td><?php echo $tarif_horaire ;?></td>
                                        <td><?php echo $tarif_jour ;?></td>
                                        <td><?php echo $location ;?></td>
										<td><?php echo $details ;?></td>
										<td>
											<?php
											if ($image_name!="") {
											 	?>
											 	<img src="<?php echo SITEURL;?>images/<?php echo $image_name ;  ?>" width="100px;">
											 	<?php
											 }else{
											 	echo "error";
											 } 
											 ?>
											
										</td>
										<td><?php echo $featured ;?></td>
										<td><?php echo $active ;?></td>
										
									<td>
										<a href="<?php echo SITEURL; ?>admin/update tarification.php?id=<?php echo $id ;?>" class="btn btn-primary">Update Tarification</a>

										<a href="<?php echo SITEURL; ?>admin/delete tarification.php?id=<?php echo $id ;?>&image_name=<?php echo $image_name;?>" class="btn btn-secondary">Delete Tarification</a>
										
									</td>
								</tr>
						

									<?php


								}
							}else{
								?>
								<tr>
									<td colspan="6"><div class="error">No cathegory</div></td>
								</tr>
								<?php

							}


						?>

						
						
					</table>
		</div>
		
		
	</div>

	<?php include('partial/footer.php');?>  
</body>
</html>	