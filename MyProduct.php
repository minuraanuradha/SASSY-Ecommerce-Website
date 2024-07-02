<?php session_start();
if(!$_SESSION["userName"])
{
	header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="Stylesheet" type="text/css" href="Css/ProductStyle.css">
    <link rel="Stylesheet" type="text/css" href="Css/extrastyle.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo/LogoW.png">
<style>

          html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  margin-top: 2vh;
  margin-left: 4%;
  float: left;
  width: 15%;
  height: 70vh;
  margin-bottom: 3vh;
  padding: 0 17px;
  transition: transform .4s;
}
.column:hover {
    color: rgba(0, 0, 0, 0.6);
    opacity: 0.9;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.container {
  width: 100%;
  text-align: center;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.addcart
{
  margin-top: 5px;
    height: 28px;
    width: 100%;
    background-color: black;
    color: white;
    font-weight: 100;
    cursor: pointer;
    transition: transform .4s;
}
.addcart:hover
{
    border: 1px solid black;
    background-color: black;
    color: white;
    font-weight: 400;
}
.addcart:active
{   
    transform: scale(0.8);
}
div{
  box-sizing: border-box;
}
.burger{
  display: none;
}
.burger div{
  width: 25px;
  height: 3px;
  background: #fff;
  margin: 5px;
  transition:all 0.5s ease;
}

    </style>
</head>

<body>
   <!--  <script>
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
          </script>-->
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
    <h1 class="prd" style="font-size: 30px; transform: rotate(0deg); font-weight: 70; margin-top: 10px; text-align: center;">MY CLOTHING </h1> 
    <hr>
  <?php
		$con = mysqli_connect("localhost","root","","sassydb","3377") ;
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql ="SELECT * FROM `tbladvertisement` WHERE `email` ='".$_SESSION["userName"]."'";
	$results = mysqli_query($con,$sql);
	if (mysqli_num_rows($results)>0){
		while($row = mysqli_fetch_assoc($results)){
	?>
  <div class="row" style="margin-bottom: 40px;">
  <div class="column">
    <div class="card">
	  <img src="<?php echo $row["imagePath"]; ?>"  style="width:100%" >
      <div class="container">
        <h2><?php echo $row["productName"]; ?></h2>        
        <p><?php echo $row["description"]; ?></p>
        <p>Co.number : <?php  echo $row["contactNumber"];?> </p> 
        <p>Published By : <?php echo $row["email"]; ?></p>
      <h4> Price : <?php echo $row["price"];?> </h4>
          <p> <a href="EditProducts.php?id=<?php echo $row["advertisementID"];?>"><input type="button" value="Edit" id="addcart" class="addcart"> </a>  <a href="DeleteProducts.php?id=<?php echo $row["advertisementID"];?>"><input type="button" value="Delete" id="addcart" class="addcart"></a></p> 
      </div>
    </div>
	 </div>
	  <?php }} ?>
</body>
</html>