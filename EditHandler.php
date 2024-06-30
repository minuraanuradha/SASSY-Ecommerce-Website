<?php session_start();

if(isset($_POST["btnSubmit"]))
{
	     $productName = $_POST["txtTitle"];
		 $description = $_POST["txtDescription"];
         $price =$_POST["txtPrice"];
		 $catagory = $_POST["lstCategory"];
		 $contactNumber = $_POST["txtContactNumber"];
		 if (isset($_POST["chkPublish"])){
			 $status = 1;
		 }
		 else
		 {
			 $status = 0;
		 }
	if(!file_exists($_FILES["imageFile"]["tmp_name"])||
	  !is_uploaded_file($_FILES["imageFile"]["tmp_name"]))
	   {
		   $imagePath = $_SESSION["imagePath"];
	   }
	   else{  
		 $imagePath = "uploads/".basename($_FILES["imageFile"]["name"]);
		 move_uploaded_file($_FILES["imageFile"]["tmp_name"] ,$imagePath);
		   }
	
	
	
	
	$con = mysqli_connect("localhost","root","","sassydb") ;//Connet to the data base with 
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql = "UPDATE `tbladvertisement` SET `productName` = '".$productName."', `description` = '".$description."', `price` = '".$price."',`publish` = '".$status."',`category` = '".$catagory."',`imagePath`='".$imagePath."' , `contactNumber` = '".$contactNumber."' WHERE `tbladvertisement`.`advertisementID` = '".$_SESSION["id"]."';";
	
	
	mysqli_query($con,$sql);
		header('location:MyProduct.php');
	}
	
else
{
	header('location:Login.php');
}
?>