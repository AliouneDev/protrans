

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
			<h1>Add Client</h1>
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
						<td>nom_client</td>
						<td>
							<input type="text" name="nom_client" placeholder="Entrer Votre nom"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>description</td>
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
							<input type="submit" name="submit" id="submit" value="Add Client" class="btn btn-secondary">
						</td>
					</tr>
				</table>
				
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$nom_client = $_POST['nom_client'];
					$description = $_POST['description'];
					
					
				
					if (isset($_FILES['image']['name'])) {
						$image_name = $_FILES['image']['name'];
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						$image_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['image']['tmp_name'];
						$destination_path = "../assets/images/clients/".$image_name;
				
						$opload = move_uploaded_file($source_path, $destination_path);
						if ($opload == false) {
							$_SESSION['opload'] = "error";
							header("location:".SITEURL."admin/manage client.php"); 
							exit;
						}
					}
					else{
						$image_name = "";
					}
				
					$sql = "INSERT INTO tbl_client SET
						nom_client = '$nom_client',
						description = '$description',
                        image_name = '$image_name'
						
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manage client.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manage client.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>

</body>
</html>
