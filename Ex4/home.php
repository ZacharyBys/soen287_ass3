<!--Exercise 6-->

<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php session_start();?>
        <meta charset="UTF-8">
        <title>Exercise 6</title>
        
        <link rel = "stylesheet"
                type = "text/css"
                href = "main_style.css"/>
        
        <script type = text/javascript src = "ass2_ex6.js"></script>
        <script type = "text/javascript" src = "timeCheck.js"></script>
        
    </head>

    <body style="background-color: #d9d9d9;" onload="timeCheck()">
    
        <div id="banner"> 
            <h1>WALLPAPER EMPORIUM<p id="time">time</p></h1>
        </div>
        <div id="sidebar">
            <h2>MENU</h2>
            <a href="home.php"><h3>Home</h3></a>    
            <a href="cart.php"><h3>My Cart</h3></a>
            <a href=""><h3>Checkout</h3></a>
            <br />
            <a href="registration.php"><h3>Register</h3></a>
            <a href="login.php"?><h3><?php if($_SESSION['active'] == false){echo "Login";}?></h3></a>
            <a href="?logout"?><h3><?php if($_SESSION['active'] == true){echo "Logout";}?></h3></a>
             <?php
                if(isset($_GET['logout'])) {
                    session_unset();
                    $_SESSION['active'] = false;
                    $_SESSION['w1quantity'] =0;
                    $_SESSION['w2quantity'] =0;
                    $_SESSION['w3quantity'] =0;
                }
             ?>
        </div>
    
        <div id="content">
            <img alt = "WallPaper 1" src="images/Drawing1.jpg" width="350" style='border:5px solid #000000'>
            <h4>Wallpaper 1: $49.99</h4>
            <h4><des>Acura Precision Concept</des></h4>
            <form action="addcart.php" method="get">
                <input type="submit" value="Add to cart">
            </form>
        </div>    
        
        <div id="content1">
            <img alt = "WallPaper 2" src="images/Drawing2.jpg" width="350" style='border:5px solid #000000'>
            <h4>Wallpaper 2: $39.99</h4>
            <h4><des>2017 Mercedes Benz G550 4x4</des></h4>
            <form action="addcart2.php" method="get">
                <input type="submit" value="Add to cart">
            </form>
        </div>
        
        <div id="content2">
            <img alt = "WallPaper 3" src="images/Drawing3.jpg" width="350" style='border:5px solid #000000'>
            <h4>Wallpaper 3: $69.99</h4>
            <h4><des> 2015 Ferrari LaFerrari</des></h4>
            <form action="addcart3.php" method="get">
                <input type="submit" value="Add to cart">
            </form>
        </div>
        
        <div id="content3">
            <img alt = "WallPaper 4" src="images/image.png" width="350" style='border:5px solid #000000'>
            <h4>More content coming soon!</h4>
        </div>
        
        <div id="botBanner">
            <div id="botContent"><a href=""><h5>About Us</h5></a></div>
            <div id="botContent1"><a href=""><h5>Contact Us</h5></a></div>
            <div id="botContent2"><a href=""><h5>Terms and Conditions</h5></a></div>
            <br /><h5>All rights reserved ©2017 Krishna Patel, Zachary Bys</h5>
        </div>

    </body>

</html>