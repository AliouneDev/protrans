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
			<h1>Manage projet</h1>
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

			<a href="<?php echo SITEURL;?>admin/add projet.php" class="btn-primary">Add projet</a>
					<br/><br/>
					<table class="table">
						<tr>
							<th>chef_de_projet</th>
							<th>client</th>
							<th>gesCategorie</th>
                            <th>Date</th>
                            <th>Statue</th>
                            <th>Contenu</th>
							<th>Images</th>
							
						</tr>
						<?php

							$sql="SELECT * FROM projet ";
							$res=mysqli_query($conn,$sql);
						if ($res==TRUE) 
							$count=mysqli_num_rows($res);
							$sn=1;  
							if ($count>0) {
								# code...
								while ($row=mysqli_fetch_assoc(($res))) {
									# code...
									$id=$row['id'];
                                    $chef_de_projet=$row['chef_de_projet'];
									$client=$row['client'];
									$gesCategorie=$row['gesCategorie'];
                                    $date=$row['date'];
                                    $statue=$row['statue'];
                                    $contenu=$row['contenu'];
                                    $image_name=$row['image_name'];
									
									?>
								<tr>
										<td><?php echo $sn++?></td>
                                        <td><?php echo $chef_de_projet ;?></td>
										<td><?php echo $client ;?></td>
										<td><?php echo $gesCategorie ;?></td>
                                        <td><?php echo $date ;?></td>
                                        <td><?php echo $statue ;?></td>
                                        <td><?php echo $contenu ;?></td>
										<td>
											<?php
											if ($image_name!="") {
											 	?>
											 	<img src="<?php echo SITEURL;?>assets/images/portfolio/projet/<?php echo $image_name ;  ?>" width="100px;">
											 	<?php
											 }else{
											 	echo "error";
											 } 
											 ?>
											
										</td>
										

									<td>
										<a href="<?php echo SITEURL; ?>admin/update projet.php?id=<?php echo $id ;?>" class="btn btn-primary">Update projet</a>

										<a href="<?php echo SITEURL; ?>admin/delete projet.php?id=<?php echo $id ;?>&image_name=<?php echo $image_name;?>" class="btn btn-secondary">Delete Tarification</a>
										
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