
<?php include('../Config/constants.php'); ?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body style="background-color: gray;">
		<div class="login" style="width:500px ;  border: 1px solid grey ; margin:5% auto ; plogining: 2%; margin-top: 100px; background-color: white">
			<h1 class="log" style="text-align:center" >Login</h1>
			<?php
				if (isset($_SESSION['login'])) {
					echo $_SESSION['login'];
					unset($_SESSION['login']);
				}
				if (isset($_SESSION['no-login-message'])) {
					echo $_SESSION['no-login-message'];
					unset($_SESSION['no-login-message']);

				}

			?>

			<form action="" method="POST" class="form" style="text-align: center; margin-top: 80px;">
			Username:<br/><br/>
			<input type="text" name="username" placeholder="Entrer votre username"><br/><br/>
			Password:<br/><br/>
			<input type="password" name="password" placeholder="Entrer votre mot de passe"><br/><br/><br/>
			<button type="submit" name="submit" value="Login" class="btn btn-success">Connecter</button> 	
			</form>

			<p class="creat" style="text-align: center">Created By - <a href="www.resto.com">Alioune thiam</a></p>
			
		</div>
		
	</body>
</html>


<?php

	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
		$res=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($res);
		if ($count==1) {
			$_SESSION['login']="blabalbal";
			$_SESSION['user']= $username;
			header("location:".SITEURL.'admin/login.php');
	}else{
		$_SESSION['login']="Le nom de l'utilisateur ou le mot de passe incorrect";
		header("location:".SITEURL.'admin/index.php');

	}

	}

?>