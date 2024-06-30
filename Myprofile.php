<?php session_start();
if(!$_SESSION["userName"])
{
	header('location:Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sassy : Profile : Online Womens Clothing Store</title>
    <link rel="Stylesheet" type="text/css" href="ProductStyle.css">
    <link rel="Stylesheet" type="text/css" href="extrastyle.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo/LogoW.png">
    <style>
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.cartset
{
    width: 100%;
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.set
{
    height: 300px;
    width: 80%;
    display: flex;
    justify-content:space-around;
    align-items: center;
    border-bottom: 1px solid black;
}
.set01
{
    height: 250px;
    width: 50%;
    display: flex;
    align-items: center;
}
.set03
{
    width: 100%;
    display: flex;
    align-items: center; text-align : center;
}
.set07
{
    width: 100%;
    align-items: center; text-align : center;
}
.pic
{
    width: 15%;
    height: 80%;
    background-color: black;
   background-size: contain;
}
.ppic
{
    width: 30%;
    height: 100px;
    background-color: black;
   background-size: cover;
   background-repeat: no-repeat;
}
.details
{
    width: 70%; 
    display: flex;
    flex-direction: column;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.pdetails
{
    width: 100%;
    display: flex;
    flex-direction:column;
    float:right;
}
.details_01
{
    width: 90%;
    height: 80%;
    display: flex;
    flex-direction:column;
    float:right;
}
.details_02
{
    width: 10%;
    height: 80%;
    display: flex;
    flex-direction:column;
    float:right;
}
.details
{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding-left: 50px;
}
.details h1
{
    font-size: 30px;
    font-weight: 300;
}
.pdetails h1
{
    font-size: 50px;
    font-weight: 300;
}
.details h3
{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 5px;
}
.pdetails h3
{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 5px;
}
.details p
{
    font-size: medium;
    
    margin-bottom: 5px;
}
.details h5
{
    font-size: medium;
    margin-top: 5px;
}
.details_01 h5
{
    font-size: medium;
    margin-top: 5px;
}
.details_02 h5
{
    font-size: medium;
    margin-top: 5px;
}
.pdetails h5
{
    font-size: medium;
    margin-top: 5px;
}
.btn500
{
    font-size: 12px;
    width: 100%;
    font-weight: 100;
    height: 30px;
    background-color: black;
    color: rgb(255, 255, 255);
}
.details input:hover
{
    background-color: rgba(0, 0, 0, 0.917);
    color: rgb(255, 255, 255);
    transform: scale(1.01);
}
.btn400
{
    width: 50%;
    font-size: 12px;
    font-weight: 100;
    height: 35px;
    background-color: black;
    color: rgb(255, 255, 255);
}
.cartset input:hover
{
    background-color: rgba(0, 0, 0, 0.917);
    color: rgb(255, 255, 255);
    transform: scale(1.01);
}
.btn600
{
    width: 100%;
    font-size: 25px;
    font-weight: 100;
    height: 50px;
    background-color: black;
    color: rgb(255, 255, 255);
    margin-bottom: 10%;
}
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body
{
    width: 100%;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size:100%;
    font-weight: 400;
}
.Nav_bar
{
    height: 75px;
    display: flex;
    align-items:end;
    margin-top: 15px;
    align-items:center;
}   
.Nav_bar h1
{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}  
.Nav_bar01
{
    width: 40%;
    height: 100%;
}
.Nav_bar02
{
    width: 20%;
    height: 100%;
    display:inline-flex;
    justify-content: center;
}
.Nav_bar03
{
    height: 100%;
    width: 40%;
    display:inline;
    justify-content: right;
    padding-left: 300px;
    padding-right: 100px;
}
.navlist1
{
    list-style:none;
    display:flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}
.iconlist1
{
    list-style:none;
    display:flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}
.item
{
    text-align: center;
    width: 100px;
}
.item a
{
    text-decoration: none;
    color: black;
    transition: transform .5s;
}
.item a:hover
{
    text-decoration: none;
    color: #f98770;
    font-weight: bolder;
}
.active
{
    border-bottom: 3px solid black;
}

.iconlist1
{   
    display: flex;
    justify-content: space-evenly;
}
.iconlist1 a
{
    text-decoration: none;
}
.iconlist1 img
{
    transition: transform .2s;
}
.seach:hover
{
    transform: scale(1.5);
}
.cart:hover
{
    transform: scale(1.5);
}
.user:hover
{
    transform: scale(1.5);
}


    </style>
</head>
<body>
    
     <!-----------------------------------Navbar Section----------------------------------->
     <div class="Nav_bar" id="P01">
        <div class="Nav_bar01">
            <ul class="navlist1">
                <li class="item"><a href="Index.html" >Home</a> </li>
                <li class="item"><a href="ProductsView.php" >Proucts</a> </li>
                <li class="item"><a href="Contac.html" >Contact Us</a> </li>
                <li class="item"><a href="About.html">About Us</a> </li>
                <li class="item"><a href="Catalog.html">Catalog</a> </li>
            </ul>  
        </div>
        <div class="Nav_bar02">
            <h1 style="font-size: 50px; font-weight: 400;">SASSY</h1>
            <!--- <img src="/Images/Logo/Name.png" height="50px"> -->
        </div>
        <div class="Nav_bar03">
            <div class="iconlist1"> 
                <a href="#Profile"><img class="seach" src="Images/Icons/Seach.png" width="20px"></a>
                <a href="Profile.php"><img class="seach" src="Images/Icons/User.png" width="20px"></a>
                <a href="Cart.html"><img class="cart" src="Images/Icons/Cart.png" width="20px"></a>
                </div>
         </div>
    </div>

    <?php
		$con = mysqli_connect("localhost","root","","sassydb") ;
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql ="SELECT * FROM `tbladvertisement` WHERE  `email` ='".$_SESSION["userName"]."'";
	$results = mysqli_query($con,$sql);
	if (mysqli_num_rows($results)>1){
		while($row = mysqli_fetch_assoc($results)){
	?> 


    <div class="set07" style="" >
            <div class="pdetails" style="width=100% ">
            <br><br>
                <h1 >Profile Details</h1><br><br><br>
                <h5>Email address</Address></h5> 
                <h3><?php echo $row["email"]; ?></h3> <br>
                <h5>Contac Number </h5> 
                <h3><?php echo $row["contactNumber"]; ?></h3> <br>
                <h5>Country</h5>
                <h3>Sri Lanka</h3> <br><br>

                <input class="btn600" type="button" value="Log Out">
            </div> 
        </div><br>
       
        <?php }} ?>  
   

</body>