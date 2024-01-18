<?php require('../Controller/loginAction.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>
<br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>';}?>
        
        <h1>Formulaire de connexion</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass">
        </div>   
        <button type="reset" class="btn btn-primary" name="reset">Reset</button>     
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
        <br><br>
        <a href="signup.php">Je n'ai pas un compte , je m'inscris</a>
        
    </form>
</body>
</html>