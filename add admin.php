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
						<td>Full Name</td>
						<td>
							<input type="text" name="full_name" placeholder="Entrer Votre nOM">
						</td>
					</tr>
					<tr>
						<td>UserName</td>
						<td>
							<input type="text" name="username" placeholder="Entrer Votre Prenom">
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input type="text" name="password" placeholder="Entrer Votre Mot de passe">
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
			$full_name=$_POST['full_name'];
			$username=$_POST['username'];
			$password=$_POST['password'];

			$sql="INSERT INTO tbl_admin SET
				full_name='$full_name',
				username='$username',
				password='$password'

			";
			
 			$res=mysqli_query($conn,$sql) or die(mysqli_error()); 
 			if($res==TRUE){
 				$_SESSION['add']="Admin added successfully";
 				header("location:".SITEURL."admin/manage admin.php"); 

 			}else{
 				$_SESSION['add']="FAILED TO ADMIN ";
 				header("location".SITEURL."admin/manage admin.php"); 

 			}
		}



	?>

	

	
</body>	
</html>