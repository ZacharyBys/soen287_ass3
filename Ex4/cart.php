<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php session_start();?>
        <meta charset="UTF-8">
        <title>Exercise 6</title>
        
        <link rel = "stylesheet"
                type = "text/css"
                href = "main_style.css"/>
        
        <script type = "text/javascript" src = "registration.js"></script>
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
        </div>
        
        <div id="content4">
            <h2> My Cart </h2>
            <br />
            <br />
            <table id="cart_table">
                <tr>
                    <td>Wallpaper 1 Quantity:</td>
                    <td><?php echo $_SESSION['w1quantity'];?></td>
                </tr>
                <tr>
                    <td>Wallpaper 2 Quantity:</td>
                    <td><?php echo $_SESSION['w2quantity'];?></td>
                </tr>
                <tr>
                    <td>Wallpaper 3 Quantity:</td>
                    <td><?php echo $_SESSION['w3quantity'];?></td>
                </tr>
                <br />
                <br />
                <tr>
                    <td><a href="home.php"><input type="submit" value="Continue Shopping"></a></td>
                    <td><input type="submit" value="Checkout"></td>
                </tr>
            </table>
        </div>
        
         <div id="botBanner">
            <div id="botContent"><a href=""><h5>About Us</h5></a></div>
            <div id="botContent1"><a href=""><h5>Contact Us</h5></a></div>
            <div id="botContent2"><a href=""><h5>Terms and Conditions</h5></a></div>
            <br /><h5>All rights reserved ©2017 Krishna Patel, Zachary Bys</h5>
        </div>

    </body>
        
</html>
    
    