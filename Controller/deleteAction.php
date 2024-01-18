<?php
     require "database.php";
    /* Connexion a la base de donner , interrogation et affichage tous les comptes et informations du compte
        que l'utilisateur a deja enregistrer dans la base de donner sous forme de tableau
    */

        //interrogation des donner et execution de la requete d'interrogation 
        $aff = $bdd ->prepare('SELECT id,nom_c , user , pass FROM users_comptes WHERE ident= ?');
        $aff->execute(array($_SESSION['id']));
        
        if($aff-> rowCount() !== 0){
        
            //Affichage du resultat obtenue
            echo'<table  border="2px", style="border:2px solid blue;font-size: 25px;text-align:center;width:90%,">
                    <caption style="font-size:50px;color:blue;margin-bottom: 4%;">La liste de tout les comptes</caption>
                        <tr style="color: blue;font-size: 30px;;background-color: yellow;"> 
                            <td>   id </td>
                            <td>   Nom du site </td>
                            <td>   Login       </td>
                            <td>   Password    </td>
                            <td>   Delete    </td>

                        <tr>';
            while( $_DATA = $aff ->fetch()){

            echo '      <tr style="color: white;background-color: grey;">
                            <td>'.$_DATA['id'].' </td>
                            <td> '.$_DATA['nom_c'].' </td>
                            <td> '.$_DATA['user'].'  </td>
                            <td> '.$_DATA['pass'].'  </td>
                            <td>
                                <button type="submit" style="width:100%;height: 50px;" class="button" name="delete" value='.$_DATA['id'].'> 
                                    Delete 
                                </button> 
                            </td>
                        </tr>';
            }
            echo'</table>';

            if (isset($_POST['delete'])) {
                        Delete($_DATA['id']);
            }
                function Delete($id){
                    $suppr = $bdd->prepare('DELETE FROM users_comptes WHERE id= ?');
                    $suppr->execute(array($id));    
                    echo "Supprimer ...";
                }
            

        }else{
            echo "<script>alert('Il n y a aucun compte correspondant a votre profil inscrit sur le site.Voulez-vous en inscrire ?');</script>"; 
            header("location : insert.php");
        }
    ?>
