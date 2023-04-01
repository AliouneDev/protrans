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
			<h1>Add Admin</h1>
			<br/><br/>

			<?php 
					if (isset($_SESSION['add'])) {
						echo $_SESSION['add'];
						unset($_SESSION['add']);
					}
				 ?>

			<form action="" method="POST">
				<table class="table">
					<tr>
						<td>Description</td>
						<td>
							<input type="text" name="description" placeholder="Entrer Votre Description">
						</td>
					</tr>
					<tr>
						<td>Titre</td>
						<td>
							<input type="text" name="titre" placeholder="Entrer Votre Titre">
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<button type="submit" name="add" id="add" class="btn btn-secondary">Ajouter</button>
						</td>
					</tr>
					
				</table>
			</form>
			
		</div>
		
	</div>


	<?php include('partial/footer.php'); ?>

	<?php
		if (isset($_POST['add'])) {
			$description=$_POST['description'];
			$titre=$_POST['titre'];
			

			$sql="INSERT INTO tbl_nos_services SET
				description='$description',
				titre='$titre'
			

			";
			
 			$res=mysqli_query($conn,$sql) or die(mysqli_error()); 
 			if($res==TRUE){
 				$_SESSION['add']="Admin added successfully";
 				header("location:".SITEURL."admin/manage apropos.php"); 

 			}else{
 				$_SESSION['add']="FAILED TO ADMIN ";
 				header("location".SITEURL."admin/manage apropos.php"); 

 			}
		}



	?>

	

	
</body>	
</html>