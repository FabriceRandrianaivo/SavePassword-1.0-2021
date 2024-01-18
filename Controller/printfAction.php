<?php

    /* Connexion a la base de donner , interrogation et affichage tous les comptes et informations du compte
        que l'utilisateur a deja enregistrer dans la base de donner sous forme de tableau
    */
        
        //interrogation des donner et execution de la requete d'interrogation 
        $aff = $bdd ->prepare('SELECT nom_c , user , pass FROM users_comptes WHERE ident= ?');
        $aff->execute(array($_SESSION['id']));
        
        if($aff-> rowCount() !== 0){
        
            //Affichage du resultat obtenue
            echo'<table width="90%" , border="2px", style="margin:5%; font-size: 25px">
                    <caption style="font-size:50px;color:blue;margin-bottom: 4%;">La liste de tout les comptes</caption>
                        <tr>
                            <td>   Nom du site </td>
                            <td>   Login       </td>
                            <td>   Password    </td>
                        <tr>';
            while( $_DATA = $aff ->fetch()){
            echo '      <tr>
                            <td> '.$_DATA['nom_c'].' </td>
                            <td> '.$_DATA['user'].'  </td>
                            <td> '.$_DATA['pass'].'  </td>
                        </tr>';
            }
            echo'</table>';
        }else{
            echo "<script>alert('Il n y a aucun compte a supprimer correspondant a votre profil inscrit sur le site');</script>"; 
        }
    ?>
