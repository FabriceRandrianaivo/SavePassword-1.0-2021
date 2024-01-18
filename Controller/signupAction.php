<?php
    require('../Model/database.php');
    //Validation du formulaire
    if(isset($_POST['validate'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['email']) AND !empty($_POST['password'])){
            //Verifie si l'utilisateur a bien completer tous les champs
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_lastname = htmlspecialchars($_POST['lastname']);
            $user_firstname = htmlspecialchars($_POST['firstname']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_password = hash('sha256',$_POST['password']);

            //Verifie si l'utilisateur existe deja sur le site
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo=?');
            $checkIfUserAlreadyExists->execute(array($user_pseudo));

            if($checkIfUserAlreadyExists->rowCount() == 0){
                //insert l'utilisateur
                $insertUserOnWebSite= $bdd-> prepare('INSERT INTO users (pseudo , nom , prenom , email , mdp) VALUES (? , ? , ? , ? , ?)');
                $insertUserOnWebSite-> execute(array($user_pseudo,$user_lastname,$user_firstname,$user_email,$user_password));

                //Recupere les information de l'utilisateur
                $getInfoOfThisUserReq = $bdd-> prepare('SELECT id,pseudo,nom,prenom,email FROM users WHERE pseudo=? AND nom=? AND prenom=? AND email=? ');
                $getInfoOfThisUserReq->execute(array($user_pseudo,$user_lastname,$user_firstname,$user_email));

                $userInfo = $getInfoOfThisUserReq->fetch(); 
                session_start();
                //Authentifier l'utilisateur sur le site et recupere ses donner dans des varieble globales 
                $_SESSION['auth']= true;
                $_SESSION['id']= $userInfo['id'];
                $_SESSION['pseudo']= $userInfo['pseudo'];
                $_SESSION['lastname']= $userInfo['nom'];
                $_SESSION['firstname']= $userInfo['prenom'];
                $_SESSION['email']= $userInfo['email'];
                
                echo "L'enregistrement a été un succès ... "; 

                //rediriger l'utilisateurvers la page d'acceuil
                header('location: index.php');

            }else{
                $errorMsg = "L'utilisateur existe deja sur le site ";
            }

        }else{
            $errorMsg ="Veuillez completez tous les champ ..." ;
        }
    }