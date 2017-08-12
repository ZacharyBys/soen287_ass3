<!DOCTYPE html>
<html>
<body>
    
    <?php
    $mycookie = "mycookie";
    $datecookie = "datecookie";
    $timecookie = "timecookie";
    date_default_timezone_set("America/New_York");
    if (!isset($_COOKIE["mycookie"])){
        echo "Welcome! You are new here.";
        setcookie($mycookie,1,time()+(86400 * 30), "/");
    } else{
    
        $value = $_COOKIE[$mycookie] + 1;
        setcookie($mycookie,$value,time()+(86400 * 30), "/");
        setcookie($datecookie,date("d/m/Y"),time()+(86400 * 30), "/");
        setcookie($timecookie,date("h:i:s"),time()+(86400 * 30), "/");
        echo "Hello, this is your " . $_COOKIE[$mycookie] . " time here";
        echo nl2br("\n");
        echo "Your last visit was on " . $_COOKIE[$datecookie] . " at " . $_COOKIE[$timecookie];
    }

    ?>
    
    
    
    
    
</body>

</html>