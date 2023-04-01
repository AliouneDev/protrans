

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
			<h1>Add A propos</h1>
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
						<td>Titre</td>
						<td>
							<input type="text" name="sujet" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Titre</td>
						<td>
							<input type="text" name="titre" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					
					<tr>
						<td>Description</td>
						<td>
							<input type="text" name="description" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>Select Images:</td>
						<td>
							<input type="file" name="image" style="width:200px;"> 
						</td>
						
					</tr>

					
					
					
					<tr>
						<td colspan="2">
							<input type="submit" name="submit" id="submit" value="Add A propos" class="btn btn-secondary">
						</td>
					</tr>
				</table>
				
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$sujet = $_POST['sujet'];
					$titre = $_POST['titre'];
					$description = $_POST['description'];
					
				
					
				
					if (isset($_FILES['image']['name'])) {
						$image_name = $_FILES['image']['name'];
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						$image_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['image']['tmp_name'];
						$destination_path = "../assets/images/".$image_name;
				
						$opload = move_uploaded_file($source_path, $destination_path);
						if ($opload == false) {
							$_SESSION['opload'] = "error";
							header("location:".SITEURL."admin/manage blog.php"); 
							exit;
						}
					}
					else{
						$image_name = "";
					}
				
					$sql = "INSERT INTO tbl_apropos2 SET
						sujet = '$sujet',
						titre = '$titre',
						description = '$description',
					
                        image_name = '$image_name'
						
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manageapropos2.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manageapropos2.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>

</body>
</html>