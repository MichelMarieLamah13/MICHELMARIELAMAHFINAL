<?php $title = "Inscription" ?>
<?php require_once("partials/_header.php"); ?>

<div class="register-container">
    <form action="" autocomplete="off" method="post">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <!--Pour afficher les messages d'erreurs-->
        <?php require_once('partials/_errors.php');?>
        <!---------------------------------------->
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" value="<?=get_input('fname');?>" required>

        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" value="<?=get_input('lname');?>" required>

        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Enter Login" name="login" value="<?=get_input('login');?>" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password_repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="register" name="register">S'inscrire</button>
        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>
</div>
<?php require_once("partials/_footer.php"); ?>
