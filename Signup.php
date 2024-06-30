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
    <script>
        function checkPassword()
                {
                    let pw = document.getElementById("txtPassword").value;
                    let cpw = document.getElementById("txtConfimPassword").value;
                    if(pw != cpw)
                        {
                            alert("Password and confrim password are not same same \n SORRY");
                            event.preventDefault();
                        }
                }
    </script>

</head>
<body>
    <div class="maincontainer2">
        <div class="Stitle">
            <h1>SIGN UP </h1>
            <ul>
                <li><a href=""><img src="Images/Icons/facebook.png" alt="facebook" ></a></li>
                <li><a href=""><img src="Images/Icons/instagram.png" alt="instagram" ></a></li>
                <li><a href=""><img src="Images/Icons/tiktok.png" alt="tiktok"></a></li>
                <li><a href=""><img src="Images/Icons/twitter.png" alt="twitter" ></a></li>
            </ul>

        </div>
        <div class="Sform">
        <form action="SignupHandler.php" method="post">
                <label for="txtname">User Name </label>
                <input type="text" name="txtname" id="txtname" placeholder="User Name">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="Email Adress" required>
                <label for="txtPassword">Password</label>
                <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" required>
                <label for="txtConfimPassword">Confirm Password</label>
                <input type="password" name="txtConfimPassword" id="txtConfimPassword" placeholder="Confirm Password"  required>
                <label for="txtContactNo">Contact Number</label>
                <input type="number" name="txtContactNo" id="txtContactNo" placeholder="ContactNomber"  required pattern="[0-9]{10}">

                

                <button type="submit" name="lsubmit" id="lsubmit"  value="Sign up" onClick="checkPassword()">Sign Up</button>
                <p class="signp"> Or</p>
                <a href="Login.php"><input type="button" value="Log in"></a>
            </form>
        </div>
    </div>
</body>