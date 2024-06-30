<?php session_start();
if(isset($_POST["btnSubmit"]))
{
	$userName = $_POST["txtEmail"];
	$password = $_POST["txtPassword"];
	$con = mysqli_connect("localhost","root","","sassydb") ;//Connet to the data base with 
	if (!$con){
		die("Connection failed: ");
	}
	$sql ="SELECT * FROM `tbluser` WHERE `email` = '".$userName."' AND password = '".$password."';";
	$results = mysqli_query($con,$sql);
	if(mysqli_num_rows($results)>0){
		$_SESSION["userName"] = $userName ;
		header('location:Profile.php');
        exit;
	}
	
}
else
{
	header('location:Login.php');
}