<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sassy : Profile : Online Womens Clothing Store</title>
    <link rel="Stylesheet" type="text/css" href="Css/ProductStyle.css">
    <link rel="Stylesheet" type="text/css" href="Css/extrastyle.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo/LogoW.png">
    <style>
        table{
	background-color:#e7e3e4
}

.main-section{
	width:100%;
	margin:0 auto;
	text-align: center;
	padding: 0px 5px;
    margin-top: 50px;
}
.dashbord{
	width:100%;
	display:list-item;
	background-color:#e7e3e4;
	color:#fff;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 15px;
}
.icon-section i{
	font-size: 30px;
	padding:10px;
	border:1px solid #fff;
	border-radius:50%;
	margin-top:-25px;
	margin-bottom: 10px;
	background-color:black;
	color:#fff;
}
.icon-section p{
	margin:0px;
	font-size: 18px;
	padding-bottom: 10px;
}
.detail-section{
	width:70%;
	background-color:black;
	color:#fff;
	padding: 5px 0px;
}
.dashbord .detail-section:hover{
	background-color:#fff;
    color:black;
	cursor: pointer;
}
.detail-section a{

	text-decoration: none;
	  display: block;
  
  text-align: center;
  color:#e7e3e4;
  padding: 14px 16px;
  text-decoration: none;
  font-family:Arial, Helvetica, sans-serif;
}
.detail-section a:hover{
color:black;
}
.detail-section :hover
{
    opacity: 0.9;
    cursor: pointer;
}
.detail-section :active
{
    transform: scale(.95);
}
.dashbord-green .icon-section,.dashbord-green .icon-section i{
	background-color:#e7e3e4;}
.dashbord-green .detail-section{
	background-color:black;
	color:#fff;
}
.dashbord-orange .icon-section,.dashbord-orange .icon-section i{
	background-color:#e7e3e4;
}
.dashbord-orange .detail-section{
	background-color:black;
	color:#fff;
}
.dashbord-blue .icon-section,.dashbord-blue .icon-section i{
	background-color:#e7e3e4;
}
.dashbord-blue .detail-section{
	background-color:black;
	color:#fff;
}
.dashbord-red .icon-section,.dashbord-red .icon-section i{
	background-color:#e7e3e4;
}
.dashbord-red .detail-section{
	background-color:black;
	color:#fff;
}
.dashbord-skyblue .icon-section,.dashbord-skyblue .icon-section i{
	background-color:#e7e3e4;
}
.dashbord-skyblue .detail-section{
	background-color:black;
	color:#fff;
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

    <table width="100%" height="225" align="center">
        <tbody>
          <tr>
            <td width="900"><div class="main-section">
            <div class="dashbord">
              <div class="icon-section"> <br />
                <p>&nbsp;</p>
              </div>
              <div class="detail-section"> <a href="Myprofile.php">My Profile    <br> </a> </div>
            </div>
            <div class="dashbord dashbord-green">
              <div class="icon-section"> <br />
                <p>&nbsp;</p>
              </div>
              <div class="detail-section"> <a href="AddProducts.php">Add Products </a> </div>
            </div>
            <div class="dashbord dashbord-blue">
              <div class="icon-section"> <br />
                <p>&nbsp;</p>
              </div>
              <div class="detail-section"> <a href="MyProduct.php">My Products</a> </div>
            </div>
            <div class="dashbord dashbord-skyblue">
              <div class="icon-section"> <br />
                <p>&nbsp;</p>
              </div>
              <div class="icon-section"> <br />
                <p>&nbsp;</p>
              </div>
              <div class="detail-section"> <a href="ProductsView.php">All Products</a> </div>
            </div>
          </div></td>
          </tr>
        </tbody>
      </table>
    <!--<section class="cartset">
        <div class="set03">
            <div class="pdetails">
                <h1>FULL NAME</h1>
                
                <h5>Bio</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias perferendis id ad asperiores rerum? Praesentium debitis aut alias vel non accusamus blanditiis ullam quidem vitae sapiente. Quasi quisquam recusandae aliquid!</p> <br>
                <h5>Country</h5>
                <h3>Sri Lanka</h3> <br>
                <h5>Contac Number</h5>
                <h3>07* *******</h3> <br>
                <h5>Country</h5>
                <h3>Sri Lanka</h3> <br>
                <h5>Email address</Address></h5>
                <h3>m**********@gmail.com</h3> <br>
                <input class="btn600" type="button" value="Log Out">
            </div>
            
        </div>
   

    </section> -->
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

        
