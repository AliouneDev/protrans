<?php include('partial/menu.php'); ?>

	<div class="main-content">
		<div class="wrapper">
			<h1>Update Contacts</h1>
			<br/><br/>

			
			<?php
				$id=$_GET['id'];
				$sql="SELECT * FROM contact_entreprise WHERE id=$id";
				$res=mysqli_query($conn,$sql);

				if ($res==true) {
					$count = mysqli_num_rows($res);
					if($count==1){
						$row=mysqli_fetch_assoc($res);
						$adresse=$row['adresse'];
						$messagerie=$row['messagerie'];
                        $telephone=$row['telephone'];

					}
					else{
						header("location:".SITEURL."admin/manage contact Entreprise.php");

					}
				}


			?>	 

			<form action="" method="POST">
				<table class="tbl-20">
					<tr>
						<td>Adresse</td>
						<td>
							<input type="text" name="adresse"  value="<?php echo $adresse;?>">
						</td>
					</tr>
					<tr>
						<td>Messagerie</td>
						<td>
							<input type="text" name="messagerie" value="<?php echo $messagerie;?>">
						</td>
					</tr>

                    <tr>
						<td>Telephone</td>
						<td>
							<input type="text" name="telephone" value="<?php echo $telephone;?>">
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<button type="submit" name="submit" id="submit" value="Update Contacts" class="btn btn-secondary">Modify</button>
						</td>
					</tr>
					
				</table>
<?php
	if (isset($_POST['submit'])) {
		//echo "addition cliked";
		$id=$_POST['id'];
		$adresse=$_POST['adresse'];
		$messagerie=$_POST['messagerie'];
        $telephone=$_POST['telephone'];

		$sql = "UPDATE contact_entreprise SET 
		adresse= '$adresse',
		messagerie='$messagerie',
        telephone='$telephone'
		WHERE id=$id
		";

		$res = mysqli_query($conn,$sql);
		if($res==true){
			$_SESSION['update']="bal bal";
			header("location:".SITEURL."admin/manage contact Entreprise.php");
		}
		else{
			$_SESSION['update']="pas modifier";
			header("location:".SITEURL."admin/manage contact Entreprise.php");

		}

	}
	


?>				



<?php include('partial/footer.php'); ?>