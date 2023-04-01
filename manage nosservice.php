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
			<h1>Manage nosservices</h1>
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

			<a href="<?php echo SITEURL;?>admin/add nosservices.php" class="btn-primary">Add nosservices</a>
					<br/><br/>
					<table class="table">
						<tr>
							<th>Serial Number</th>
                            <th>titre</th>
							<th>description</th>
							
							<th>icone</th>
							
						</tr>
						<?php

							$sql="SELECT * FROM 
                            services ";
							$res=mysqli_query($conn,$sql);
						if ($res==TRUE) 
							$count=mysqli_num_rows($res);
							$sn=1;  
							if ($count>0) {
								# code...
								while ($row=mysqli_fetch_assoc(($res))) {
									# code...
									$id=$row['id'];
									$description=$row['description'];
									$titre=$row['titre'];
                                    $icone_name=$row['icone_name'];
									
									?>
								<tr>
										<td><?php echo $sn++?></td>
                                        <td><?php echo $titre ;?></td>
										<td><?php echo $description ;?></td>
										
                                        
										<td>
											<?php
											if ($icone_name!="") {
											 	?>
											 	<img src="<?php echo SITEURL;?>assets/icone/<?php echo $icone_name ;  ?>" width="100px;">
											 	<?php
											 }else{
											 	echo "error";
											 } 
											 ?>
											
										</td>
										

									<td>
										<a href="<?php echo SITEURL; ?>admin/update nosservices.php?id=<?php echo $id ;?>" class="btn btn-primary">Update nosservices</a>

										<a href="<?php echo SITEURL; ?>admin/delete nosservices.php?id=<?php echo $id ;?>&icone_name=<?php echo $icone_name;?>" class="btn btn-secondary">Delete Tarification</a>
										
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