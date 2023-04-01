<?php

	include('../Config/constants.php');
	$id=$_GET['id'];

	$sql = "DELETE FROM contact_entreprise WHERE id=$id";
 
	$res = mysqli_query($conn,$sql); 

	if ($res==TRUE) {
		$_SESSION['delete']="Admin deleted succesfull";
		header("location:".SITEURL."admin/manage contact Entreprise.php");
	}
	else{

		$_SESSION['delete']="<div style=color:blue >Admin deleted succesfull></div>";
		header("location:".SITEURL."admin/manage contact Entreprise.php");
	}

?>