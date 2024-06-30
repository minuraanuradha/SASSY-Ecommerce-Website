<?php session_start();

    if(isset($_POST["lsubmit"]))
    {
        
        $fullname = $_POST["txtname"];
	    $userName = $_POST["txtEmail"];
	    $password = $_POST["txtPassword"];
	    $Contacnumber = $_POST["txtContactNo"];

        $con = mysqli_connect("localhost","root","","sassydb");


        if(!$con)
        {
            die("Sorry! we are facing a technical issue");
        }

        $sql ="INSERT INTO `tbluser`(`email`, `name`, `contactNumber`, `password`) VALUES ('".$userName."','".$fullname."','".$Contacnumber."','".$password."');";

        $result = mysqli_query($con,$sql);
		header('location: Profile.php');
    }
