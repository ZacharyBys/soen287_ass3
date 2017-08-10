<?php
    session_start();
    $_SESSION['w2quantity'] +=1;
    header("Location: home.php");
    die();
?>