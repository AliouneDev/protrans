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
				<h1>Manage admin</h1>
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
				<a href="add contact Entreprise.php" class="btn-primary">Add Contacts Entreprise</a>
				<br/><br/>
				<table class="table">
					<tr>
						<th>Serial Number</th>
						<th>adresse</th>
						<th>messagerie</th>
                        <th>Telephone</th>
					</tr>

					<?php
						$sql="SELECT * FROM contact_entreprise";
						$res=mysqli_query($conn,$sql);
						if ($res==TRUE) {
							$count=mysqli_num_rows($res);
							$sn=1; 
							if ($count>0) {
								while($rows=mysqli_fetch_assoc($res)){
									$id=$rows['id'];
									$adresse=$rows['adresse'];
                                    $messagerie=$rows['messagerie'];
                                    $telephone=$rows['telephone'];

							?>
								<tr>
									<td><?php echo $sn++?></td>
									<td><?php echo $adresse; ?></td>
                                    <td><?php echo $messagerie; ?></td>
                                    <td><?php echo $telephone; ?></td>
									<td>
										<a href="<?php echo SITEURL; ?>admin/update contact Entreprise.php?id=<?php echo $id ;  ?>" class="btn-primary">Changer de Coordonnées</a>
										
										
										<a href="<?php echo SITEURL; ?>admin/delete contact Entreprise.php?id=<?php echo $id ;  ?>" class="btn btn-danger">Supprimer Coordonnées</a>
									</td>
								</tr>

							<?php		
								}
							}
							else{

							}
						}

					?>

					
				</table>

				
			</div>	
			
		</div>
	
<?php include('partial/footer.php'); ?>
</body>
</html>
