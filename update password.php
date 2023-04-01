<?php include('partial/menu.php'); ?>
	<div class="main-content">
		<div class="wrapper">
			<h1>Update Admin</h1>
			<br/><br/>
			<?php
				if (isset($_GET['id'])) {
					
				}

			?>
			<form action="" method="POST">
				<table class="tbl-20">
					<tr>
						<td>Current Password</td>
						<td>
							<input type="password" name="current_password">
						</td>
					</tr>

					<tr>
						<td>New Password</td>
						<td>
							<input type="password" name="new_password" >
						</td>
					</tr>

					<tr>
						<td>Confirm Password</td>
						<td>
							<input type="password" name="confirm_password" >
						</td>
					</tr>

					<tr>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<button type="submit" name="submit" id="submit" value="Change password" class="btn btn-secondary">Change</button>
						</td>
					</tr>

				</table>
			</form>		


		</div>
	</div>

<?php
	if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$current_password=$_POST['current_password'];
		$new_password=$_POST['new_password'];
		$confirm_password=$_POST['confirm_password'];

		$sql = "SELECT  FROM tbl_admin WHERE id=$id AND password='$current_password'";
		$res=mysqli_query($conn,$sql);

		if ($res==true) {
			$count=mysqli_num_rows($res);
			if ($count==1) {
				if ($new_password==$confirm_password) {
					# code...
					$sql2="UPDATE tbl_admin SET 
						password='$new_password'
						WHERE id=$id

					";
					$res2=mysqli_query($conn,$sql2);
					if ($res2==true) {
						
					}
					else{
						$_SESSION['pwd bon pwd']="pas pwd";
					header("location:".SITEURL."admin/manage admin.php");
					echo "mot de passe pas conforme";

					}


				}
				else{
					$_SESSION['pwd no confirm']="pas conformea";
					header("location:".SITEURL."admin/manage admin.php");
					echo "mot de passe pas conforme";
				}
				
			}
			else{
				$_SESSION['user not found']="bla bla";
				header("location:".SITEURL."admin/manage admin.php");
			}
		}


	}

?>			



<?php include('partial/footer.php'); ?>
