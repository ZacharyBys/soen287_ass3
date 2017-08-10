
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
            <a href="home.html"><h3>Home</h3></a>    
            <a href=""><h3>My Cart</h3></a>
            <a href=""><h3>Checkout</h3></a>
            <br />
            <a href="registration.php"><h3>Register</h3></a>
        </div>
        
        <div id="content4">
            <?php
            $error = "";
            if (isset($_POST['sel'])){
            $fn = $ln = $ea = $pn = $initial = $confirm = "";
                $fn = $_POST['fn'];
                $ln = $_POST['ln'];
                $ea = $_POST['ea'];
                $pn = $_POST['pn'];
                $initial = $_POST['initial'];
                $confirm = $_POST['confirm'];


                if (strlen($initial) < 8){
                    $error = "Password must be 8 characters";
                }
                if ($initial != $confirm){
                    $error = "Passwords do not match";
                }
                if ($fn == ""){
                    $error = "Please fill all boxes";
                }
                if ($ln == ""){
                     $error = "Please fill all boxes";
                }
                if ($ea == ""){
                     $error = "Please fill all boxes";
                }
                if ($pn == ""){
                     $error = "Please fill all boxes";
                }
                if ($initial == ""){
                     $error = "Please fill all boxes";
                }
                if ($confirm == ""){
                     $error = "Please fill all boxes";
                }

            }
            ?>
            <h2>Please Enter the following information</h2>
            <br/>
            <br/>
            <form method="post" action="registration.php" id="registration"> 
                
                <p>
                <label>First Name
                    <input type="text" id="fn" name ="fn" value="<?=@$fn?>"/>
                </label>
                
                <label>Last Name
                    <input type="text" id="ln" name ="ln" value="<?=@$ln?>"/>
                </label>
                </p>
               
                <p>
                <label>Email Address
                    <input type="text" id="ea" name="ea" value="<?=@$ea?>"/>
                </label>
               
                
                <label>Phone Number
                    <input type="text" id="pn" name="pn" value="<?=@$pn?>"/>
                </label>
                </p>
                
                <p>
                <label>Password
                    <input type="password" id="initial" name="initial" value="<?=@$initial?>"/>
                </label>
                    
                <label>Confirm Password
                    <input type="password" id="confirm" name="confirm" value="<?=@$confirm?>"/>
                </label> 
                </p>  
                <br />
                <input name ="sel" type="submit" id="confirm" value="Submit" onclick="return checkEntry()">
            </form>
            <br />
            <br />
            <?php
                if (isset($_POST['sel'])){
                    echo $error;
                    if($error == ""){
                        $handle = fopen('members.txt', 'a') or die('Cannot open file  ');
                        fwrite($handle, $fn.PHP_EOL);
                        fwrite($handle, $ln.PHP_EOL);
                        fwrite($handle, $ea.PHP_EOL);
                        fwrite($handle, $pn.PHP_EOL);
                        fwrite($handle, $initial.PHP_EOL);
                        header("Refresh:0; url=home.html");
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
    
    