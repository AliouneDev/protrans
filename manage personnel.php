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
			<h1>Manage personnel</h1>
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

			<a href="<?php echo SITEURL;?>admin/add personnel.php" class="btn-primary">Add personnel</a>
					<br/><br/>
					<table class="table">
						<tr>
							<th>Serial Number</th>
							<th>Poste</th>
							<th>Nom</th>
							<th>Images</th>
							
						</tr>
						<?php

							$sql="SELECT * FROM personnel ";
							$res=mysqli_query($conn,$sql);
						if ($res==TRUE) 
							$count=mysqli_num_rows($res);
							$sn=1;  
							if ($count>0) {
								# code...
								while ($row=mysqli_fetch_assoc(($res))) {
									# code...
									$id=$row['id'];
									$poste=$row['poste'];
									$nom=$row['nom'];
                                    $image_name=$row['image_name'];
									
									?>
								<tr>
										<td><?php echo $sn++?></td>
										<td><?php echo $poste ;?></td>
										<td><?php echo $nom ;?></td>
                                        
										<td>
											<?php
											if ($image_name!="") {
											 	?>
											 	<img src="<?php echo SITEURL;?>assets/images/<?php echo $image_name ;  ?>" width="100px;">
											 	<?php
											 }else{
											 	echo "error";
											 } 
											 ?>
											
										</td>
										

									<td>
										<a href="<?php echo SITEURL; ?>admin/update personnel.php?id=<?php echo $id ;?>" class="btn btn-primary">Update personnel</a>

										<a href="<?php echo SITEURL; ?>admin/delete personnel.php?id=<?php echo $id ;?>&image_name=<?php echo $image_name;?>" class="btn btn-secondary">Delete Tarification</a>
										
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