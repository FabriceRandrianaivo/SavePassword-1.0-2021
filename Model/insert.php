<?php  require '../Controller/insertAction.php';?>

<!DOCTYPE html>
<html lang="en">
    <?php include '../includes/head.php'?>
<body>
    <br><br>
    <form method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>';}?>

        <h1>Ajout de nouveau donnée</h1>

        <div class="mb-3">
            <label >Nom du compte</label>
            <input type="text" name="nom_c">
        </div>
        <div class="mb-3">
            <label >Nom d'utilisateur</label>
            <input type="text"  name="login">
        </div>
        <div class="mb-3">
            <label >Mot de pass</label>
            <input type="password" name="pass">
        </div>  

        <button type="reset"  name="reset">Reset</button>     
        <button type="submit" name="validate">Enregistrer</button>
        <br><br>
        <a href="printf.php">Voir les comptes deja enregistrer</a>
</form>
</body>
</html>

