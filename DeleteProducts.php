<?php session_start();

	$con = mysqli_connect("localhost","root","","sassydb") ;
	if (!$con){
		die("Sorry we are introuble");
	}
	$sql ="DELETE FROM `tbladvertisement` WHERE `tbladvertisement`.`advertisementID` = ".$_SESSION["id"]."";
	
	
	mysqli_query($con,$sql);
		header('location:MyProduct.php');
?> 