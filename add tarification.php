

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php
	include('partial/menu.php');
?>	
	<div class="main content">
		<div class="wrapper">
			<h1>Add Cathegory</h1>
			<br/>
			<?php
				if (isset($_SESSION['add'])) {
					echo $_SESSION['add'];
					unset($_SESSION['add']);
				}

				if (isset($_SESSION['opload'])) {
					echo $_SESSION['opload'];
					unset($_SESSION['opload']);
				}

			?>

			<br/><br/>

			<form action="" method="POST" enctype="multipart/form-data">
				<table class="tbl-30">
					<tr>
						<td>Marque</td>
						<td>
							<input type="text" name="marque" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Tarificatio Horaire</td>
						<td>
							<input type="number" name="tarif_horaire" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Tarificatio Jour</td>
						<td>
							<input type="number" name="tarif_jour" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Location</td>
						<td>
							<input type="number" name="location" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Details</td>
						<td>
							<input type="text" name="détails" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Select Images:</td>
						<td>
							<input type="file" name="image" style="width:200px;"> 
						</td>
						
					</tr>

					
					
					<tr>
						<td>Featured</td>
						<td>
							<input type="radio" name="featured" placeholder="Entrer Votre Mot de passe" value="yes">Yes
							<input type="radio" name="featured" placeholder="Entrer Votre Mot de passe" value="no">No<br/><br/>
						</td>
					</tr>

					<tr>
						<td>active</td>
						<td>
							<input type="radio" name="active" placeholder="Entrer Votre Mot de passe" value="yes">Yes
							<input type="radio" name="active" placeholder="Entrer Votre Mot de passe" value="no">No<br/><br/>
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<input type="submit" name="submit" id="submit" value="Add Cathegory" class="btn btn-secondary">
						</td>
					</tr>
					
				</table>
				
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$marque = $_POST['marque'];
					$tarif_horaire = $_POST['tarif_horaire'];
					$tarif_jour = $_POST['tarif_jour'];
					$location = $_POST['location'];
					$details = $_POST['details'];
				
					if (isset($_POST['featured'])) {
						$featured = $_POST['featured']; 
					}
					else{
						$featured = "no";
					}
					if (isset($_POST['active'])) {
						$active = $_POST['active'];
					}
					else{
						$active = "no";
					}
					
				
					if (isset($_FILES['image']['name'])) {
						$image_name = $_FILES['image']['name'];
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						$image_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['image']['tmp_name'];
						$destination_path = "../images/".$image_name;
				
						$opload = move_uploaded_file($source_path, $destination_path);
						if ($opload == false) {
							$_SESSION['opload'] = "error";
							header("location:".SITEURL."admin/manage_tarification.php"); 
							exit;
						}
					}
					else{
						$image_name = "";
					}
				
					$sql = "INSERT INTO tbl_tarification SET
						marque = '$marque',
						tarif_horaire = $tarif_horaire,
						tarif_jour = $tarif_jour,
						location = $location,
						details = '$details',
						image_name = '$image_name',
						featured = '$featured',
						active = '$active'
						
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manage tarification.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manage tarification.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>

</body>
</html>
