    
<!DOCTYPE html>
<html lang="en">
    <?php require "../includes/head.php";?>
<body>
    <?php require "../Controller/deleteAction.php";?>
    <br><br>
    <!--table>
        <form method="post">
            <tr>
                <td><label for="delete">Entrée l'id du compte a supprimer</label></td>
                <td><input type="text" name="id" id="delete"></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Delete" name="delete"></td><tr>
            <?php
                /* if(isset($_POST['delete'])){
                    if(!empty($_POST['id'])){
                        delete($_POST['id']);
                    }else{
                    
                        echo "<script>alert('Veuillez entrée l'identifiant du compte a supprimée');</script>"; 
                    }
                }*/
            ?>
        </form>
    </table-->
</body>
</html>
