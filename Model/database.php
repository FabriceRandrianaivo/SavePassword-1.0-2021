<?php
    try{
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=savepassword;charset=utf8;','root','');
    }catch(Exception $e){
        die('Une erreur a été trouver : ' .$e->getMessage());
    }
    
    