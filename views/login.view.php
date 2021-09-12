<?php $title = "Connexion" ?>
<?php require_once("partials/_header.php"); ?>

<div class="register-container">
    <form action="" autocomplete="off" method="post">
        <h1>Login</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <!--Pour afficher les messages d'erreurs-->
        <?php require_once('partials/_errors.php');?>
        <!---------------------------------------->
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Enter Login" name="login" value="<?=get_input('login');?>" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <hr>
        <p>By login you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="register" name="connect">Se Connecter</button>
        <div class="container signin">
            <p>Already have an account? <a href="register.php">Sign in</a>.</p>
        </div>
    </form>
</div>
<?php require_once("partials/_footer.php"); ?>
