<?php

	include('../Config/constants.php');
	$id=$_GET['id'];

	$sql = "DELETE FROM tbl_nos_services WHERE id=$id";

	$res = mysqli_query($conn,$sql); 

	if ($res==TRUE) {
		$_SESSION['delete']="Services deleted succesfull";
		header("location:".SITEURL."admin/manage apropos.php");
	}
	else{

		$_SESSION['delete']="<div style=color:blue >Admin deleted succesfull></div>";
		header("location:".SITEURL."admin/manage apropos.php");
	}

?>