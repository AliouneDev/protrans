<?php include('partial/menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Modifier Tarification</h1>
		<br/><br/>

		
		<?php
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				$sql="SELECT * FROM tbl_tarification WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$marque=$row['marque'];
						$tarif_horaire=$row['tarif_horaire'];
                        $tarif_jour=$row['tarif_jour'];
                        $location=$row['location'];
						$details=$row['details'];
                        $image_name=$row['image_name'];
                        $featured=$row['featured'];
                        $active=$row['active'];

					}
					else{
						header("location:".SITEURL."admin/manage tarification.php");
						exit;
					}
				}
			} else {
				header("location:".SITEURL."admin/manage tarification.php");
				exit;
			}
		?>	 

		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-20">
				<tr>
					<td>Marque</td>
					<td>
						<input type="text" name="marque" value="<?php echo $marque;?>">
					</td>
				</tr>
				<tr>
					<td>Tarif Horaire</td>
					<td>
						<input type="number" name="tarif_horaire" value="<?php echo $tarif_horaire;?>">
					</td>
				</tr>

                <tr>
					<td>Tarif Jour</td>
					<td>
						<input type="number" name="tarif_jour" value="<?php echo $tarif_jour;?>">
					</td>
				</tr>

                <tr>
					<td>Location</td>
					<td>
						<input type="number" name="location" value="<?php echo $location;?>">
					</td>
				</tr>
				<tr>
					<td>Location</td>
					<td>
						<input type="text" name="details" value="<?php echo $location;?>">
					</td>
				</tr>
				<tr>
					<td>New Images:</td>
					<td>
						<input type="file" name="image" value="" style="width:200px;"> 
					</td>
						
				</tr>

                <tr>
					<td>Featured</td>
					<td>
						<input type="radio" name="featured" value="yes" <?php if($featured=="yes"){echo "checked";} ?>>Yes
						<input type="radio" name="featured" value="no" <?php if($featured=="no"){echo "checked";} ?>>No<br/><br/>
					</td>
				</tr>

                <tr>
					<td>Active</td>
					<td>
						<input type="radio" name="active" value="yes" <?php if($active=="yes"){echo "checked";} ?>>Yes
						<input type="radio" name="active" value="no" <?php if($active=="no"){echo "checked";} ?>>No<br/><br/>
					</td>
				</tr>

				<tr>
						<td colspan="2">
							<input type="submit" name="submit" id="submit" value="Add Cathegory" class="btn btn-secondary">
						</td>
					</tr>
 </div>
</div> 
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
							header("location:".SITEURL."admin/manage tarification.php"); 
							exit;
						}
					}
					else{
						$image_name = "";
					}
				
					$sql = "UPDATE tbl_tarification SET
						marque = '$marque',
						tarif_horaire = $tarif_horaire,
						tarif_jour = $tarif_jour,
						location = $location,
						details = '$details',
						image_name = '$image_name',
						featured = '$featured',
						active = '$active'
                        WHERE id=$id
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