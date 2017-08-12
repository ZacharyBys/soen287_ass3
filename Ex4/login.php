<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
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
            <h2>Login Below</h2>
            <br/>
            <br/>
            <?php
               $error = "";
               $ema = $pass = "";
            if(isset($_POST['select'])){
               $ema = $_POST['ema'];
               $pass = $_POST['pass'];    
                if ($ema == "" || $pass == "")
                    $error = "Fill out the Boxes";
            }
            ?>
            <form method="post" action="login.php" id="login"> 
                
                <label>Email Address
                    <input type="text" id="ema" name="ema"/>
                </label>
              
                <label>Password
                    <input type="password" id="pass" name="pass"/>
                </label>
                <br />
                <br />
                <input name ="select" type="submit" id="confirm" value="Submit" onclick="return checkLogin()">
            </form>
            <br />
            <br />
            <?php
                if (isset($_POST['select'])){
                        $array = explode("\n", file_get_contents('members.txt'));
                        $i = 2;
                    if ($_POST['ema'] != "" && $_POST['pass'] != ""){
                        while (trim($_POST['ema']) != trim($array[$i])){
                            $i+=1;
                        }
                            $i+=2;
                            if (trim($_POST['pass']) == trim($array[($i)])){
                                echo '<script language="javascript">alert("Logged In.")</script>';
                                session_start();
                                $_SESSION['active'] = true;
                                $_SESSION['w1quantity']=0;
                                $_SESSION['w2quantity']=0;
                                $_SESSION['w3quantity']=0;
                                header("Location: home.php");
                            } else {
                                echo '<script language="javascript">alert("Incorrect combination")</script>';
                            }
                    }
                }
            ?>
        </div>
        
         <div id="botBanner">
            <div id="botContent"><a href=""><h5>About Us</h5></a></div>
            <div id="botContent1"><a href=""><h5>Contact Us</h5></a></div>
            <div id="botContent2"><a href=""><h5>Terms and Conditions</h5></a></div>
            <br /><h5>All rights reserved ©2017 Krishna Patel, Zachary Bys</h5>
        </div>

    </body>
        
</html>
    
    