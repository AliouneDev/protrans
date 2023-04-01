<?php include('partial/menu.php'); ?>

	<div class="main-content">
		<div class="wrapper">
			<h1>Update A Propos</h1>
			<br/><br/>

			
			<?php
				$id=$_GET['id'];
				$sql="SELECT * FROM tbl_apropos WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$texte=$row['texte'];
                        $sujet=$row['sujet'];
                        $description=$row['description'];

					}
					else{
						header("location:".SITEURL."admin/manage apropos.php");

					}
				}


			?>	 

			<form action="" method="POST">
				<table class="tbl-20">
					<tr>
						<td>TITRE</td>
						<td>
							<input type="text" name="texte"  value="<?php echo $texte;?>">
						</td>
					</tr>

                    <tr>
						<td>SUJET</td>
						<td>
							<input type="text" name="sujet"  value="<?php echo $sujet;?>">
						</td>
					</tr>

                    <tr>
						<td>DESCRIPTION</td>
						<td>
							<input type="text" name="description"  value="<?php echo $description;?>">
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<button type="submit" name="submit" id="submit" value="Update Apropos" class="btn btn-secondary">Modify</button>
						</td>
					</tr>
					<tr>
						<td>New Images:</td>
						<td>
							<input type="file" name="image_name" value="" style="width:200px;"> 
						</td>
							
					</tr>
				</table>
<?php
	if (isset($_POST['submit'])) {
		//echo "addition cliked";
		$id=$_POST['id'];
		$texte=$_POST['texte'];
		$sujet=$_POST['sujet'];
        $description=$_POST['description'];
        $image_name=$_POST['image_name'];

		$sql = "UPDATE tbl_apropos SET 
		texte= '$texte',
        sujet= '$sujet',
        description= '$description',
        image_name= '$image_name'
		WHERE id=$id
		";

		$res = mysqli_query($conn,$sql);
		if($res==true){
			$_SESSION['update']="bal bal";
			header("location:".SITEURL."admin/manage apropos.php");
		}
		else{
			$_SESSION['update']="pas modifier";
			header("location:".SITEURL."admin/manage apropos.php");

		}

	}
	


?>				



<?php include('partial/footer.php'); ?>