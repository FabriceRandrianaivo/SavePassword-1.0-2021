<?php
    session_start();
    $_SESSION= [];
    session_destroy();
    if(!isset($_SESSION['auth'])){
        header('Location: ../View/login.php');
    }