<?php require('../Controller/securityAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../includes/head.php';?>
<body>

    <?php include '../includes/navbar.php';?>   

    
    <table>
        <caption><h1>Save Password</h1></caption>
        <tr>
            <td><button class="Menue" onclick="location.href='../Model/insert.php'"><img src="../image/add.jpg" alt="" title="Ajouter un compte"></button></td>
            <td><button class="Menue" onclick="location.href='../Model/update.php'"><img src="../image/update.jpg" alt="" title="Mettre à jour un compte"></button></td>
            <td><button class="Menue" onclick="location.href='../Model/delete.php'"><img src="../image/delete.jpg" alt="" title="Supprimer un compte"></button></td>
        </tr>   
        <tr>
            <td><button class="Menue" onclick="location.href='../Model/printf.php'"><img src="../image/printf.jpg" alt="" title="Afficher les comptes"></button></td>
            <td><button class="Menue"><a href=""><img src="../image/images.png" alt="" title="Aide"></a></button></td>
            <td><button class="Menue" onclick="location.href='../Controller/logoutAction.php'">
                        <img src="../image/logout.jpg" alt="" title="Deconnexion">
                </button>
            </td>
        </tr>
    </table>
</body>
</html>