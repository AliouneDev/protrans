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
			<h1>Add services</h1>
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
						<td>titre</td>
						<td>
							<input type="text" name="titre" placeholder="Entrer Votre description"><br/><br/>
						</td>
					</tr>

					<tr>
						<td>description</td>
						<td>
							<input type="text" name="description" placeholder="Entrer Votre description"><br/><br/>
						</td>
					</tr>


					<tr>
						<td>Select icones:</td>
						<td>
							<input type="file" name="icone" style="width:200px;"> 
						</td>
						
					</tr>

					
					
					
					<tr>
						<td colspan="2">
							<input type="submit" name="submit" id="submit" value="Add services" class="btn btn-secondary">
						</td>
					</tr>
				</table>
				
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$titre = $_POST['titre'];
					$description = $_POST['description'];
					
					
				
					if (isset($_FILES['icone']['name'])) {
						$icone_name = $_FILES['icone']['name'];
						$ext = strtolower(pathinfo($icone_name, PATHINFO_EXTENSION));
						$icone_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['icone']['tmp_name'];
						$destination_path = "../assets/icone/".$icone_name;
				
						$opload = move_uploaded_file($source_path, $destination_path);
						if ($opload == false) {
							$_SESSION['opload'] = "error";
							header("location:".SITEURL."admin/manage nosservice.php"); 
							exit;
						}
					}
					else{
						$icone_name = "";
					}
				
					$sql = "INSERT INTO services SET
						titre = '$titre',
						description = '$description',
                        icone_name = '$icone_name'
						
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manage nosservice.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manage nosservice.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>

</body>
</html>
