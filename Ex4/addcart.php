<?php
    session_start();
    $_SESSION['w1quantity'] +=1;
    header("Location: home.php");
    die();
?>