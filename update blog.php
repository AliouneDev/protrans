<?php include('partial/menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Modifier Blog</h1>
		<br/><br/>

		
		<?php
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				$sql="SELECT * FROM posts WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$titre=$row['titre'];
						$contenu=$row['contenu'];
                        $date_creation=$row['date_creation'];
                        $auteur=$row['auteur'];
                        $image_name=$row['image_name'];
                        

					}
					else{
						header("location:".SITEURL."admin/manage blog.php");
						exit;
					}
				}
			} else {
				header("location:".SITEURL."admin/manage blog.php");
				exit;
			}
		?>	 

		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-20">
				<tr>
					<td>Titre</td>
					<td>
						<input type="text" name="titre" value="<?php echo $titre;?>">
					</td>
				</tr>
				<tr>
					<td>Contenu</td>
					<td>
						<input type="text" name="contenu" value="<?php echo $contenu;?>">
					</td>
				</tr>

                <tr>
					<td>Date Creation</td>
					<td>
						<input type="date" name="date_creation" value="<?php echo $creation;?>">
					</td>
				</tr>

                <tr>
					<td>Auteur</td>
					<td>
						<input type="text" name="auteur" value="<?php echo $auteur;?>">
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
							<input type="submit" name="submit" id="submit" value="Add Cathegory" class="btn btn-secondary">
						</td>
					</tr>
 </div>
</div> 
<?php
				if (isset($_POST['submit'])) {
					$titre = $_POST['titre'];
					$contenu = $_POST['contenu'];
					$date_creation = $_POST['date_creation'];
					$auteur = $_POST['auteur'];
				
					
				
					if (isset($_FILES['image']['name'])) {
						$image_name = $_FILES['image']['name'];
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						$image_name = "tarification_".rand(000,999).'.'.$ext;
				
						$source_path = $_FILES['image']['tmp_name'];
						$destination_path = "../images/".$image_name;
				
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
				
					$sql = "UPDATE posts SET
						titre = '$titre',
						contenu = '$contenu',
						date_creation = '$date_creation',
						auteur = '$auteur',
						image_name = '$image_name'
						
                        WHERE id=$id
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manage blog.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manage blog.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>