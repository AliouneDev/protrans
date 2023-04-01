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
			<h1>Add Contacts Entreprise</h1>
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
						<td>Adresse</td>
						<td>
							<input type="text" name="adresse" placeholder="Entrer Votre Description">
						</td>
					</tr>

                    <tr>
						<td>Méssagerie</td>
						<td>
							<input type="text" name="messagerie" placeholder="Entrer Votre Titre">
						</td>
					</tr>

                    <tr>
						<td>Telephone</td>
						<td>
							<input type="text" name="telephone" placeholder="Entrer Votre Titre">
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


	<?php
		if (isset($_POST['add'])) {
			$adresse=$_POST['adresse'];
			$messagerie=$_POST['messagerie'];
            $telephone=$_POST['telephone'];

			$sql="INSERT INTO contact_entreprise SET
				adresse='$adresse',
                messagerie='$messagerie',
                telephone='$telephone'

			";
			
 			$res=mysqli_query($conn,$sql) or die(mysqli_error()); 
 			if($res==TRUE){
 				$_SESSION['add']="Admin added successfully";
 				header("location:".SITEURL."admin/manage contact Entreprise.php"); 

 			}else{
 				$_SESSION['add']="FAILED TO ADMIN ";
 				header("location".SITEURL."admin/manage contact Entreprise.php"); 

 			}
		}



	?>

	

	
</body>	
</html>