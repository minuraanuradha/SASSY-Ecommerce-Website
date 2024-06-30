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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sassy : Products : Online Womens Clothing Store</title>
    <link rel="Stylesheet" type="text/css" href="Css/ProductStyle.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo/LogoW.png">
    <style>
        #top01
{
    background-image: url(Images/Images/Item/Denimset01.jpg);
    background-size: cover;
}
#top02
{
    background-image: url(Images/Images/Item/item_12.jpg);
    background-size: cover;
}#top03
{
    background-image: url(Images/Images/Item/item_13.jpg);
    background-size: cover;
}#top04
{
    background-image: url(Images/Images/Item/item_14.jpg);
    background-size: cover;
}#top05
{
    background-image: url(Images/Images/Item/item_16.jpg);
    background-size: cover;
}#top06
{
    background-image: url(Images/Images/Item/item_19.jpg);
    background-size: cover;
}#top07
{
    background-image: url(Images/Images/Item/item_20.jpg);
    background-size: cover;
}#top08
{
    background-image: url(Images/Images/Item/item_21.jpg);
    background-size: cover;
}#top09
{
    background-image: url(Images/Images/Item/item_22.jpg);
    background-size: cover;
}#top10
{
    background-image: url(Images/Images/Item/item_23.jpg);
    background-size: cover;
}#top11
{
    background-image: url(Images/Images/Item/item_11.jpg);
    background-size: cover;
}#top12
{
    background-image: url(Images/Images/Item/item_01.jpg);
    background-size: cover;
}#top13
{
    background-image: url(Images/Images/Item/item_07.jpg);
    background-size: cover;
}
#top14
{
    background-image: url(Images/Images/Item/item_08.jpg);
    background-size: cover;
}#top15
{
    background-image: url(Images/Images/Item/item_09.jpg);
    background-size: cover;
}#top16
{
    background-image: url(Images/Images/Item/item_10.jpg);
    background-size: cover;
}#top17
{
    background-image: url(Images/Images/Item/item_11.jpg);
    background-size: cover;
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
  
};

navSlide();
          </script>
    <div class="Nav_bar" id="P01">
        <div class="Nav_bar01">
            <ul class="navlist1">
                <li class="item"><a href="Index.html" >Home</a> </li>
                <li class="item"><a href="Prouducts.html" >Proucts</a> </li>
                <li class="item"><a href="Contac.html">Contact Us</a> </li>
                <li class="item"><a href="About.html" class="active">About Us</a> </li>
                <li class="item"><a href="Catalog.html">Catalog</a> </li>
            </ul>  
        </div>
        <div class="Nav_bar02">
            <h1 style="font-size: 50px; font-weight: 400;">SASSY</h1><!---
           <img src="/Images/Logo/Name.png" height="50px"> -->
        </div>
        <div class="Nav_bar03">
            <div class="iconlist1"> 
                <a href="#Profile"><img class="seach" src="Images/Icons/Seach.png" width="20px"></a>
                <a href="Profile.php"><img class="seach" src="Images/Icons/User.png" width="20px"></a>
                <a href="Cart.html"><img class="cart" src="Images/Icons/Cart.png" width="20px"></a>
                </div>
         </div>
    </div>
    <h1 class="prd" style="font-size: 50px; transform: rotate(0deg); font-weight: 100; margin-top: px; text-align: center;">ALL CLOTHING. </h1> 
    <hr>
    <div class="pdcpage">
       <div class="left_container"></div>
       <div class="middle_container">

        <form style="display: flex; justify-content: space-between; width: 95%;">
            <div class="catagorylist" style="width: 40%; " >
                <label for="Catagory" style=" font-size: 17px;"> Catagory:</label>
                <select id="Catagory" name="clothing-type" style="width: 30%; height: 20px; border:hidden; font-size: larger;" >
                    <option value="All">All</option>
                  <option value="t-shirts">T-Shirts</option>
                  <option value="pants">Pants</option>
                  <option value="dresses">Dresses</option>
                  <option value="jackets">Jackets</option>
                  <option value="shoes">Shoes</option>
                </select>
            </div>
            <div class="sortlist" style="width: 40%;  display: flex; justify-content: flex-end;" >
                <label for="Sort" style=" font-size: 17px;">Catagory:</label>
                <select id="Sort" name="Sort"  style="width: 30%; height: 20px; border: hidden; font-size: larger;">
                   <option value="Sort">Sort</option>
                   <option value="recent">Most resent</option>
                   <option value="relevent">Most relevent</option>
                   <option value="l-h">Price low to High</option>
                   <option value="h-l">Price High to low</option>
            </select>
            </div>
          </form>
        
        <!-----------------------------1 st SET OvER--------------------------------->
        <!--   <div class="productset">
            <div class="prdcard">
                <div class="p_top" id="top01">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top02">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top03">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top04">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top05">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
        </div>
        <!-----------------------------2 nd SET OvER--------------------------------->
        <!--    <div class="productset">
            <div class="prdcard">
                <div class="p_top" id="top06">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top07">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top08">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top09">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top10">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
        </div>
          <!-----------------------------3 rd SET OvER--------------------------------->
          <!--     <div class="productset">
            <div class="prdcard">
                <div class="p_top" id="top11">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top12">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top13">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top14">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top15">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
        </div>
        <!-----------------------------4th SET OvER--------------------------------->
        <!--    <div class="productset">
            <div class="prdcard">
                <div class="p_top" id="top01">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top02">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top03">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top04">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top05">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
        </div>
        <!-----------------------------5 th SET OvER--------------------------------->
        <!--   <div class="productset">
            <div class="prdcard">
                <div class="p_top" id="top01">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top02">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top03">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top04">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top05">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
        </div>
         <!-----------------------------6th SET OvER--------------------------------->
         <!   <div class="productset">
            <div class="prdcard">
                <div class="p_top" id="top01">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top02">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top03">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top04">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
            <div class="prdcard">
                <div class="p_top" id="top05">
                    <a href="Html/Productdetails.html"><small>Click on me </small></a>
                </div>
                <div class="p_bottom">
                    <h5>NAME</h5>
                    <p>Catagory</p>
                </div>
                <button class="addcart"> Add To Cart</button>
            </div>
        </div>
       </div>
       <div class="right_container"></div>
    </div>-->
     <!------------------------------------Footer------------------------------------>
     <div class="Footer">
        <div class="Middle_01"></div>
        <div class="Middle_04">
            <table>
                <tr class="ft">
                    <td><ul>
                        <li><a href="Index.html"> <b>HOME PAGE</b> </a></li>                          
                        <li><a href="Prouducts.html"> <b>PROUCT PAGE</b></a></li>
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