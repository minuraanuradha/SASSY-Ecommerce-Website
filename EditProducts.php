<?php session_start(); 
if(!$_SESSION["userName"])
{
      header('location:Login.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link rel="Stylesheet" type="text/css" href="Css/ProductStyle.css">
    <link rel="Stylesheet" type="text/css" href="Css/extrastyle.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo/LogoW.png">
    
      <style>
.form-style-5{
	width: 100%;
  height:95vh;
  display: flex;
  justify-content: center;
  align-items: center;
	background: #e7e3e4;;
	margin: 10px auto;
	text-align: center;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
  font-size: 17px;
  font-weight: bold;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 input[type="file"],
.form-style-5 textarea,
.form-style-5 select {
	font-family:font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	background:#ffffff;
	border: none;
	font-size: 15px;
	padding: 20px;
	width: 100%;
  height: ;
	box-sizing: border-b40pxox; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #ffffff;
	color:#000000;
	margin-bottom: 20px;
	text-align: center;
}

.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,

.form-style-5 input[type="file"]:focus,

.form-style-5 select:focus{
	background: #ffffff;
  color: #000000;
}
.form-style-5 select:after{
	background: #000000;
  color: #000000;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:5px;
}
.form-style-5 .number {
	background: #000000;
	color: #fff;
	height: 20px;
	width: 30px;
	display: flex;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{

	display: flex;
  height: 40px;
	color: #ffffff;
	background: #000000;
	font-size: 15px;
  justify-content: center;
	width: 100%;
	border: 1px solid #000000;
	border-width: 1px 1px 3px;
  margin-top: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #ffffff;
  color:#000000 ;
}


    </style>
</head>

<body>
     <script>
       const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links a");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s `;
      }
    });
    burger.classList.toggle("toggle");
  });
  //
};

navSlide();
          </script>
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
                <a href="Catalog.html"><img class="seach" src="Images/Icons/Seach.png" width="20px"></a>
                <a href="Profile.php"><img class="seach" src="Images/Icons/User.png" width="20px"></a>
                <a href="Cart.html"><img class="cart" src="Images/Icons/Cart.png" width="20px"></a>
                </div>
         </div>
    </div>
          
    <div class="form-style-5">
<form method="post" action="EditHandler.php" enctype="multipart/form-data">
	
   <?php 
    $_SESSION["id"] = $_GET["id"];
    $con = mysqli_connect("localhost","root","","sassydb"); 
  if(!$con){
            die("We are on Trooble");
  }
  $sql = "SELECT * FROM `tbladvertisement` WHERE `advertisementID`='".$_GET["id"]."'"; 
    
 $results = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($results);
    ?>
<fieldset>
<legend> Iteam Edit</legend>
<p>
  <input type="text" name="txtTitle" placeholder="Product Name *"
		 value="<?php echo $row["productName"];?>">
	
  <textarea name="txtDescription" placeholder="Describe about the product" value="<?php echo $row["description"];?>" ></textarea>
  <input type="text" name="txtPrice" placeholder="Product Price *"
		 value="<?php echo $row["price"];?>">
  <input type="file" name="imageFile" placeholder="Upload a Picture">
  Category   <select  name="lstCategory">
    <option value="T-Shirts" <?php
			if($row["category"]=="T-Shirts"){
			echo"selected";}
			?>>T-Shirts"</option>
    <option value="jackets"<?php
			if($row["category"]=="jackets"){
			echo"selected";}
			?>>jackets</option>
     <option value="Pants"<?php
			if($row["category"]=="Pants"){
			echo"selected";}
			?>>Pants</option>
     <option value="Shorts"<?php
			if($row["category"]=="Shorts"){
			echo"selected";}
			?>>Shorts</option>
     <option value="Skirts"<?php
			if($row["category"]=="Skirts"){
			echo"selected";}
			?>>Skirts</option>
    <option value="Bag"<?php
			if($row["category"]=="Bag"){
			echo"selected";}
			?>>Bag</option>
    </select>
</p>


      
</fieldset>
<fieldset>
<legend> Contact Details</legend>
<input type="text" name="txtContactNumber" placeholder="Your Contact Number" value = "<?php echo $row["contactNumber"];?>">
 <label for="chkPublish">Publish the Advertisement : 
  <input type="checkbox" name="chkPublish" <?php 
         if($row["publish"] == 1){echo "checked";}?>>        
  <?php $_SESSION["imagePath"] = $row["imagePath"];?>
	
</label>
</fieldset>
    
<p>
  <input type="submit" value="Add Post" name="btnSubmit"/>
</p>
</form>
</div>
            <!------------------------------------Footer------------------------------------>
            <div class="Footer">
                <div class="Middle_01"></div>
                <div class="Middle_04">
                    <table>
                        <tr class="ft">
                            <td><ul>
                                <li><a href="Index.html"> <b>HOME PAGE</b> </a></li>                          
                                <li><a href="ProductsView.php"> <b>PROUCT PAGE</b></a></li>
                                <li><a href="Contac.html"><b>CONTAC US</b></a></li>
                                <li><a href="About.html"><b>ABOUT US</b></a></li>                           
                                <li><a href="Catalog.html"><b>CATALOG</b></a></li>
                            </ul></td>
                            <td><ul>
                                <li> <b>CATALOG</b> </li>
                                <li>New In</li>
                                <li>Sale</li>
                                <li>Clothing</li>
                                <li>Accessories</li>
                            </ul></td>
                            <td><ul>
                                <li> <b>COUSTOME CARE</b> </li>
                                <li> FAQ</li>
                                <li> Disposal Instructions</li>
                                <li> Return Policy</li>
                                <li> Promotion Terms & Conditions</li>
                            </ul></td>
                            <td>
                            <ul>
                                <li></b></li>
                                <li><b></b</li>
                            </ul>
                            </td>
                            <td><ul>
                                <li> <b>COUSTOME CARE</b> </li>
                                <li> <input class="ftext" type="text" placeholder="Your Questions"></li>
                                <li> <input class="fbutton" type="button" value="Any Question"></li>
                            </ul></td>
                        </tr>
                    </table>
                </div>
                <div class="Middle_03"></div>
            </div>
            <hr>
            <!------------------------------------Copywirte------------------------------------>
            <div class="Copywirte">
                <div class="Middle_01"></div>
                <div class="Middle_02">
                    <p>@ <i> Copyright</i> SASSY Clothing <i> 2023 - 2024</i></p>
                    <p> <i>All rights reserved Powerd By the</i> <b>Minura Anuradha</b>  </p>
                </div>
                <div class="Middle_03"></div>
            </div>
</body>
</html>