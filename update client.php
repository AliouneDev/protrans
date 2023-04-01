<?php include('partial/menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Modifier Client</h1>
		<br/><br/>

		
		<?php
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				$sql="SELECT * FROM tbl_client WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$nom_client=$row['nom_client'];
						$description=$row['description'];
                        $image_name=$row['image_name'];
                        

					}
					else{
						header("location:".SITEURL."admin/manage client.php");
						exit;
					}
				}
			} else {
				header("location:".SITEURL."admin/manage client.php");
				exit;
			}
		?>	 

		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-20">
				<tr>
					<td>nom_client</td>
					<td>
						<input type="text" name="nom_client" value="<?php echo $nom_client;?>">
					</td>
				</tr>
				<tr>
					<td>description</td>
					<td>
						<input type="text" name="description" value="<?php echo $description;?>">
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
							<input type="submit" name="submit" id="submit" value="Update Client" class="btn btn-secondary">
						</td>
					</tr>
 </div>
</div> 
<?php
				if (isset($_POST['submit'])) {
					$nom_client = $_POST['nom_client'];
					$description = $_POST['description'];
				
				
					
				
					if (isset($_FILES['image']['name'])) {
						$image_name = $_FILES['image']['name'];
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						$image_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['image']['tmp_name'];
						$destination_path = "../images/clients/".$image_name;
				
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
				
					$sql = "UPDATE tbl_client SET
						nom_client = '$nom_client',
						description = '$description',
						image_name = '$image_name'
						
                        WHERE id=$id
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