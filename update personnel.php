<?php include('partial/menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Modifier personnel</h1>
		<br/><br/>

		
		<?php
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				$sql="SELECT * FROM personnel WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$poste=$row['poste'];
                        $nom=$row['nom'];
                        $image_name=$row['image_name'];
                        

					}
					else{
						header("location:".SITEURL."admin/manage personnel.php");
						exit;
					}
				}
			} else {
				header("location:".SITEURL."admin/manage personnel.php");
				exit;
			}
		?>	 

		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-20">
				<tr>
					<td>poste</td>
					<td>
						<input type="text" name="poste" value="<?php echo $poste;?>">
					</td>
				</tr>
				<tr>
					<td>nom</td>
					<td>
						<input type="text" name="nom" value="<?php echo $nom;?>">
					</td>
				</tr>

                
				<tr>
					<td>New Images:</td>
					<td>
						<input type="file" name="image" value="" style="width:200px;"> 
					</td>
						
				</tr>

                

				<tr>
						<td colspan="2">
							<input type="submit" name="submit" id="submit" value="Add Client" class="btn btn-secondary">
						</td>
					</tr>
 </div>
</div> 
<?php
				if (isset($_POST['submit'])) {
					$poste = $_POST['poste'];
					$nom = $_POST['nom'];
					
				
					
				
					if (isset($_FILES['image']['name'])) {
						$image_name = $_FILES['image']['name'];
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						$image_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['image']['tmp_name'];
						$destination_path = "../images/".$image_name;
				
						$opload = move_uploaded_file($source_path, $destination_path);
						if ($opload == false) {
							$_SESSION['opload'] = "error";
							header("location:".SITEURL."admin/manage personnel.php"); 
							exit;
						}
					}
					else{
						$image_name = "";
					}
				
					$sql = "UPDATE personnel SET
						poste = '$poste',
						nom = '$nom',
						image_name = '$image_name'
						
                        WHERE id=$id
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manage personnel.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manage personnel.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>