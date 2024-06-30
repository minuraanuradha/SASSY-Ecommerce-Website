<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sassy : Online Womens Clothing Store</title>
    <link rel="Stylesheet" type="text/css" href="Css/Style.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo/LogoW.png">
    <style>
        body
        {  
           background-image: url(Images/Images/HomeBg\ \(3\).png);
        }
        .ltitle
        {
            background-image: url(Images/Images/Login1.jpeg);
        }
        .Stitle
        {
            background-image: url(Images/Images/Signup3.jpeg);
        }

    </style>

</head>
<body>
    <div class="maincontainer1">
        <div class="ltitle">
            <h1>LOG  IN </h1>
            <ul>
                <li><a href=""><img src="Images/Icons/facebook.png" alt="facebook" ></a></li>
                <li><a href=""><img src="Images/Icons/instagram.png" alt="instagram" ></a></li>
                <li><a href=""><img src="Images/Icons/tiktok.png" alt="tiktok"></a></li>
                <li><a href=""><img src="Images/Icons/twitter.png" alt="twitter" ></a></li>
            </ul>

        </div>
        <div class="lform" >
        <form action="LoginHandler.php" method="post">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="Email Adress" required>
                <label for="txtPassword">Password</label>
                <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" required>
                <a href="" style="padding-top:10px; margin-bottom: 30px; font-size: small; color:#cc655c;">forget password</a> 
                <button type="submit" name="btnSubmit" id="btnSubmit"  value="Log In">Log In</button>
                <p class="signp"> Or</p>
                <a href="Signup.php"><input type="button" value="Sign Up"></a><br><br>
                <a href="Profile.php"><input type="button" value="Profile "></a>
            </form>
        </div>
    </div>
</body>