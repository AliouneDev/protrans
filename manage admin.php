<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php include('partial/menu.php');?>
		
 
		<!-- Main Content Section Starts-->
		<div class="main-content">
			<div class="wrapper">
				<h1>Manage admin</h1>
				<br/><br/><br/><br/><br/>
				<?php 
					if (isset($_SESSION['add'])) {
						echo $_SESSION['add'];
						unset($_SESSION['add']);
					}
					if (isset($_SESSION['delete'])) {
						echo $_SESSION['delete'];
						unset($_SESSION['delete']);
					}
					if (isset($_SESSION['update'])) {
						echo $_SESSION['update'];
						unset($_SESSION['update']);
					}
					if (isset($_SESSION['user not found'])) {
						echo $_SESSION['user not found'];
						unset($_SESSION['user not found']);
					}
					if (isset($_SESSION['pwd no confirm'])) {
						echo $_SESSION['pwd no confirm'];
						unset($_SESSION['pwd no confirm']);
					}
					if (isset($_SESSION['pwd bon pw'])) {
						echo $_SESSION['pwd bon pw'];
						unset($_SESSION['pwd bon pw']);
					}
				 ?>
				<a href="add admin.php" class="btn-primary">Add Admin</a>
				<br/><br/>
				<table class="table">
					<tr>
						<th>Serial Number</th>
						<th>full name</th>
						<th>UserName</th>
						<th>Actions</th>
					</tr>

					<?php
						$sql="SELECT * FROM tbl_admin";
						$res=mysqli_query($conn,$sql);
						if ($res==TRUE) {
							$count=mysqli_num_rows($res);
							$sn=1; 
							if ($count>0) {
								while($rows=mysqli_fetch_assoc($res)){
									$id=$rows['id'];
									$full_name=$rows['full_name'];
									$username=$rows['username'];

							?>
								<tr>
									<td><?php echo $sn++?></td>
									<td><?php echo $full_name; ?></td>
									<td><?php echo $username; ?></td>
									<td>
										<a href="<?php echo SITEURL; ?>admin/update password.php?id=<?php echo $id ;  ?>" class="btn-primary">Changer de password</a>
										
										<a href="<?php echo SITEURL; ?>admin/update admin.php?id=<?php echo $id ;  ?>" class="btn btn-primary">Update Admin</a>
										<a href="<?php echo SITEURL; ?>admin/delete admin.php?id=<?php echo $id ;  ?>" class="btn btn-danger">Delete Admin</a>
									</td>
								</tr>

							<?php		
								}
							}
							else{

							}
						}

					?>

					
				</table>

				
			</div>	
			
		</div>
	
<?php include('partial/footer.php'); ?>
</body>
</html>
