<?php require('database.php');

    //Validation du formulaire
    if(isset($_POST['validate'])){
        if(!empty($_POST['nom_c']) AND !empty($_POST['login']) AND !empty($_POST['pass'])){
            //Verifie si l'utilisateur a bien completer tous les champs
            $user_nom_c = htmlspecialchars($_POST['nom_c']);
            $user_login = htmlspecialchars($_POST['login']);
            $user_password = htmlspecialchars($_POST['pass']);
            $user_ident = $_SESSION['id']; 
            //Verifie si le compte existe deja dans la base de donnée
            $checkIfComptAlreadyExists = $bdd->prepare('SELECT id FROM users_comptes WHERE nom_c =? AND user=? AND ident=?');
            $checkIfComptAlreadyExists-> execute(array($user_nom_c , $user_login , $user_ident));

            if($checkIfComptAlreadyExists->rowCount() == 0){
                //insertion du compte
                $insertComptOnWebSite= $bdd-> prepare('INSERT INTO users_comptes( nom_c , user , pass , ident) VALUES (? , ? , ? , ?)');
                $insertComptOnWebSite-> execute(array($user_nom_c, $user_login,$user_password,$user_ident));
                
                echo "L'enregistrement a été un succès ... ";
                header ('../index.php');
            }else{
                $errorMsg = "Le compte a déjà été enregistrée sur le site  ";
            }

        }else{
            $errorMsg ="Veuillez completez tous les champs nécéssaire pour l'enregistrement du compte ..." ;
        }
    }