<?php require('../Controller/signupAction.php');?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../includes/head.php';?>
<body>  

    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>';}?>

        <h1>Formulaire d' insciption</h1>

        <div class="mb-3">
            <label  class="form-label">Pseudo</label>
            <input type="text" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">E-mail</label>
            <input type="Email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>        
        <button type="reset" class="btn btn-primary" name="reset">Reset</button>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <br><br>
        <a href="login.php">J'ai deja un compte , je me connect</a>
    </form>
</body>
</html>