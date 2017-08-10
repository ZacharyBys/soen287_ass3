<?php
    session_start();
    $_SESSION['w3quantity'] +=1;
    header("Location: home.php");
    die();
?>