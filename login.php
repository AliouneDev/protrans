<?php include('partial/menu.php') ; ?>
<br><br><br><br><br><br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="image" style="background-image: url(../Images/livreur.jpg");>



		<!-- Main Content Section Starts-->
		<div >
			<div class="wrapper">
				<h1 class="#" style="color: red; text-align: center;">Tableau de Bord</h1>
				<br/><br/>
				<?php
				if (isset($_SESSION['login'])) {
					echo $_SESSION['login'];
					unset($_SESSION['login']);
				}

			?>
			<br/><br/>

				<div class="col-4 text-center">
					<?php 
						$sql = "SELECT * FROM tbl_apropos";

						$res = mysqli_query($conn,$sql);

						$count=mysqli_num_rows($res);


					?>
					<h1><?php echo $count;?></h1>
					<br/ >
					A propos
				</div>

				<div class="col-4 text-center">
					<?php 
						$sql = "SELECT * FROM tbl_blog";

						$res = mysqli_query($conn,$sql);

						$count=mysqli_num_rows($res);


					?>
					<h1><?php echo $count;?></h1>
					<br/ >
					BLOG
				</div>

				<div class="col-4 text-center">
					<?php 
						$sql2 = "SELECT * FROM tbl_admin";

						$res2 = mysqli_query($conn,$sql2);

						$count2=mysqli_num_rows($res2);


					?>
					<h1><?php echo $count2;?></h1>
					
					ADMIN
				</div>

				<div class="col-4 text-center">
					<?php 
						$sql3 = "SELECT * FROM tbl_acceuil";

						$res3 = mysqli_query($conn,$sql3);

						$count3=mysqli_num_rows($res3);


					?>
					<h1><?php echo $count3;?></h1>
					
					ACCEUIL
				</div>

				<div class="col-4 text-center">
					<?php
						$sql4="SELECT SUM(total) AS Total FROM tbl_order WHERE status='delivered'";

						$res4 = mysqli_query($conn,$sql4);

						$row4=mysqli_fetch_assoc($res4);

						$total_revenue=$row4['Total'];

					?>
					<h1><?php echo $total_revenue." CFA";?></h1>
					<br/ >
					Revenues Generales
				</div>
				<div class="clearfix"></div>
			</div>	
			
		</div>
		<!-- Main Content Section Ends-->

		<!-- Footer Section Starts-->
		
		<!-- Footer Section Ends-->
</body>
</html>	
<br><br><br><br><br><br><br><br><br><br>			
<?php include('partial/footer.php');  ?>	