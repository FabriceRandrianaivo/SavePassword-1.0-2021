<?php
    require('../Model/database.php');

    if(isset($_POST['validate'])){
        //Verifie si l'utilisateur a bien completer tous les champs
        if(!empty($_POST['pseudo']) AND !empty($_POST['pass'])){

                //les donner de l'utilisateur
                $user_pseudo = htmlspecialchars($_POST['pseudo']);
                $user_password = htmlspecialchars($_POST['pass']);

                
                $checkIfUserExists = $bdd->prepare('SELECT id,pseudo,nom,prenom,email,mdp FROM users WHERE pseudo = ?');
                $checkIfUserExists ->execute(array($user_pseudo));
                //Verifie si l'utilisateur existe dans le site
                if($checkIfUserExists-> rowcount() > 0){

                    //recupere les donner de l'utilisateur
                    $userInfo = $checkIfUserExists->fetch();

                    //Verifie si le mot de pass est correct
                    $crypte= hash('sha256',$_POST['pass']);
                    
                        if($crypte == $userInfo['mdp']){
                        //Authentifier l'utilisateur sur le site et recupere ses donner dans des variable globales 

                        $_SESSION['auth']= true;
                        $_SESSION['id']= $userInfo['id'];
                        $_SESSION['pseudo']= $userInfo['pseudo'];
                        $_SESSION['lastname']= $userInfo['nom'];
                        $_SESSION['firstname']= $userInfo['prenom'];
  
                        //rediriger l'utilisateurvers la page d'acceuil
                        header('location: index.php');
                    }else{
                        $errorMsg="Votre mot de passe est incorect ";
                    }
                }else{
                    $errorMsg="Votre pseudo est incorect ";
                }
            }else{
                $errorMsg ="Veuillez completez tous les champ ..." ;
        }
    }