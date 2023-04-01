<?php
	if (isset($_SESSION['username'])) {
		$_SESSION['no-login-message']="ahkjakja";
		header("location:".SITEURL."admin/login.php");
		
	}


?>