<?php session_start(); ?>
<?php require_once('config/database.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('filters/guest.filter.php'); ?>
<?php
if (isset($_POST['register'])) {

    //--Si tous les champs ne sont pas vides
    if (not_empty([$_POST['fname'],$_POST['lname'], $_POST['login'], $_POST['password'], $_POST['password_repeat']])) {

        $errors = [];
        extract($_POST);
        //---First name minimum 3 caractères
        if (mb_strlen($fname) < 3) {
            $errors[] = "First Name trop court, (minimum 3 caractères)";
        }
        //---Last name minimum 3 caractères
        if (mb_strlen($lname) < 3) {
            $errors[] = "Last trop court, (minimum 3 caractères)";
        }
        //---Login minimum 3 caractères
        if (mb_strlen($login) < 3) {
            $errors[] = "Login trop court, (minimum 3 caractères)";
        }

        //--Mots de pass (minimum 6 caractères)
        if (mb_strlen($password) < 6) {
            $errors[] = "Password trop court, (minimum 6 caractères)";
        } else if ($password != $password_repeat) {
            $errors[] = "Les deux password ne concordent pas";
        }
        //On verifie l'unicité du Login
        if (is_already_in_use('login', $login, 'users')) {
            $errors[] = "Login, déjà utilisé!";
        }

        //--Si il n'y a pas eu d'erreurs
        if (count($errors) == 0) {
            //--Stocker les infos dans la bd
            $q = $db->prepare("INSERT INTO users(fname,lname,login,password) VALUES (:fname,:lname,:login,:password)");
            $q->execute([
                'fname' => $fname,
                'lname' => $lname,
                'login' => $login,
                'password'=> sha1($password)
                ]);
                    set_flash("Votre compte a été crée avec succès!", "success");
                    redirect('login.php');
            } else {
            save_input_data();
        }
    } else {
        $errors[] = "Veuillez, remplir tous les champs";
        //--On sauvegarde les valeurs en session
        save_input_data();
    }
} else {
    clear_input_data();
}

require_once("views/register.view.php");
