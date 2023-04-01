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
			<h1>Manage Client</h1>
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

			<a href="<?php echo SITEURL;?>admin/add client.php" class="btn-primary">Add Client</a>
					<br/><br/>
					<table class="table">
						<tr>
							<th>Serial Number</th>
							<th>Nom Client</th>
							<th>description</th>
							<th>Images</th>
							
						</tr>
						<?php

							$sql="SELECT * FROM tbl_client ";
							$res=mysqli_query($conn,$sql);
						if ($res==TRUE) 
							$count=mysqli_num_rows($res);
							$sn=1;  
							if ($count>0) {
								# code...
								while ($row=mysqli_fetch_assoc(($res))) {
									# code...
									$id=$row['id'];
									$nom_client=$row['nom_client'];
									$description=$row['description'];
									$image_name=$row['image_name'];
									
									?>
								<tr>
										<td><?php echo $sn++?></td>
										<td><?php echo $nom_client ;?></td>
										<td><?php echo $description ;?></td>
                                       
										<td>
											<?php
											if ($image_name!="") {
											 	?>
											 	<img src="<?php echo SITEURL;?>assets/images/clients/<?php echo $image_name ;  ?>" width="100px;">
											 	<?php
											 }else{
											 	echo "error";
											 } 
											 ?>
											
										</td>
										

									<td>
										<a href="<?php echo SITEURL; ?>admin/update client.php?id=<?php echo $id ;?>" class="btn btn-primary">Update Client</a>

										<a href="<?php echo SITEURL; ?>admin/delete client.php?id=<?php echo $id ;?>&image_name=<?php echo $image_name;?>" class="btn btn-secondary">Delete Client</a>
										
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