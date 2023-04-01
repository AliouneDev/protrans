<?php include('partial/menu.php'); ?>

	<div class="main-content">
		<div class="wrapper">
			<h1>Update Admin</h1>
			<br/><br/>

			
			<?php
				$id=$_GET['id'];
				$sql="SELECT * FROM tbl_nos_services WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$description=$row['description'];
						$titre=$row['titre'];

					}
					else{
						header("location:".SITEURL."admin/manage apropos.php");

					}
				}


			?>	 

			<form action="" method="POST">
				<table class="tbl-20">
					<tr>
						<td>Description</td>
						<td>
							<input type="text" name="description"  value="<?php echo $description;?>">
						</td>
					</tr>
					<tr>
						<td>Titre</td>
						<td>
							<input type="text" name="titre" value="<?php echo $titre;?>">
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<button type="submit" name="submit" id="submit" value="Update Services" class="btn btn-secondary">Modify</button>
						</td>
					</tr>
					
				</table>
<?php
	if (isset($_POST['submit'])) {
		//echo "addition cliked";
		$id=$_POST['id'];
		$description=$_POST['description'];
		$titre=$_POST['titre'];

		$sql = "UPDATE tbl_nos_services SET 
		description= '$description',
		titre='$titre'
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