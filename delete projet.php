<?php

	include('../Config/constants.php');
	$id=$_GET['id'];

	$sql = "DELETE FROM projet WHERE id=$id";

	$res = mysqli_query($conn,$sql); 

	if ($res==TRUE) {
		$_SESSION['delete']="Admin deleted succesfull";
		header("location:".SITEURL."admin/manage projet.php");
	}
	else{

		$_SESSION['delete']="<div style=color:blue >Admin deleted succesfull></div>";
		header("location:".SITEURL."admin/manage projet.php");
	}

?>