<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php include('partial/menu.php');?>
		
 
		<!-- Main Content Section Starts-->
		<div class="main-content">
			<div class="wrapper">
				<h1>Manage A propos</h1>
				<br/><br/><br/><br/><br/>
				<?php 
					if (isset($_SESSION['add'])) {
						echo $_SESSION['add'];
						unset($_SESSION['add']);
					}
					if (isset($_SESSION['delete'])) {
						echo $_SESSION['delete'];
						unset($_SESSION['delete']);
					}
					if (isset($_SESSION['update'])) {
						echo $_SESSION['update'];
						unset($_SESSION['update']);
					}
					if (isset($_SESSION['user not found'])) {
						echo $_SESSION['user not found'];
						unset($_SESSION['user not found']);
					}
					if (isset($_SESSION['pwd no confirm'])) {
						echo $_SESSION['pwd no confirm'];
						unset($_SESSION['pwd no confirm']);
					}
					if (isset($_SESSION['pwd bon pw'])) {
						echo $_SESSION['pwd bon pw'];
						unset($_SESSION['pwd bon pw']);
					}
				 ?>
                 <a href="add service.php" class="btn-primary">Ajouter un service</a>
				<br/><br/>
				<table class="table">
					<tr>
						<th>Serial Number</th>
						<th>Description</th>
						<th>Titre</th>
						<th>Description</th>
                        <th>Images</th>
					</tr>

    <!-- Avoir la possibilité d'ajouter une  nouvelle a propos: A mon point de vue pas très interessqnt vu que y a un seul a propos; Cependant 
le modifier modifier oui-->             
				    <!--
                        <a href="add admin.php" class="btn-primary">Add Admin</a>
				<br/><br/>
				<table class="table">
					<tr>
						<th>Serial Number</th>
						<th>full name</th>
						<th>UserName</th>
						<th>Actions</th>
					</tr>
--> 
					<?php
                    /* Pour le texte de a propos */
						$sql="SELECT * FROM tbl_apropos";
						$res=mysqli_query($conn,$sql);
						if ($res==TRUE) {
							$count=mysqli_num_rows($res);
							$sn=1; 
							if ($count>0) {
								while($rows=mysqli_fetch_assoc($res)){
									$id=$rows['id'];
									$texte=$rows['texte'];
                                    $sujet=$rows['sujet'];
									$description=$rows['description'];
                                    $image_name=$rows['image_name'];

							?>
                                
								<tr>
									<td><?php echo $sn++?></td>
									<td><?php echo $texte; ?></td>
                                    <td><?php echo $sujet; ?></td>
                                    <td><?php echo $description; ?></td>
                                    <td><?php echo $image_name; ?></td>
                                    
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
                                   
									<td>
										
										
										<a href="<?php echo SITEURL; ?>admin/update apropos.php?id=<?php echo $id ;  ?>" class="btn btn-primary">Modifier le texte d'entré</a>
										
									</td>
								</tr>

							<?php		
								}
							}
							else{

							}
						}?>
<!-----------------------Pour les services texte de a propos---------------------------------->
<br />
<br />
<?php
                    /* Pour le texte des services */
						$sql="SELECT * FROM tbl_nos_services";
						$res=mysqli_query($conn,$sql);
						if ($res==TRUE) {
							$count=mysqli_num_rows($res);
							$sn=1; 
							if ($count>0) {
								while($rows=mysqli_fetch_assoc($res)){
									$id=$rows['id'];
									$description=$rows['description'];
									$titre=$rows['titre'];

							?>
								<tr>
									<td><?php echo $sn++?></td>
									<td><?php echo $description; ?></td>
                                    <td><?php echo $titre; ?></td>
									<td>
										
                                    <a href="<?php echo SITEURL; ?>admin/update nos services.php?id=<?php echo $id ;  ?>" class="btn btn-primary">Modifier la description et/ou le titre</a>
                                    <br /> <br /> 
									<a href="<?php echo SITEURL; ?>admin/delete nos services.php?id=<?php echo $id ;  ?>" class="btn btn-secondary">Supprimer ce service</a>
										
									</td>
								</tr>

							<?php		
								}
							}
							else{

							}
						}?>

					
				</table>

				
			</div>	
			
		</div>
	
<?php include('partial/footer.php'); ?>
</body>
</html>
