<?php session_start(); ?>
<?php require_once('config/database.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('filters/guest.filter.php'); ?>
<?php
if (isset($_POST['connect'])) {

    //--Si tous les champs ne sont pas vides
    if (not_empty([$_POST['login'], $_POST['password']])) {

        $errors = [];
        extract($_POST);
        //---Requete pour selectionner les users
        //--Ayant l'email ou le pseudo
        $q = $db->prepare("SELECT * FROM users
                         WHERE  login=:login
                         AND password=:password");
        $q->execute([
            'login' => $login,
            'password' => sha1($password)
        ]);
        //--Calcul le nombre de ligne
        $userHasBeenFound = $q->rowCount();
        //--Pouvoir recupérer les données sous forme d'objet
        $user = $q->fetch(PDO::FETCH_OBJ);
        //--Si un user trouvé
        if ($userHasBeenFound) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['login'] = $user->login;
            $_SESSION['fname'] = $user->fname;
            $_SESSION['lname'] = $user->lname;
            //--redirection avec l'id pour nous permettre
            //--de pouvoir recupérer les données de celui
            //--qui est connecté
            set_flash("Bienvenu sur votre espace personnel", "info");
            redirect('profile.php?id=' . $user->id);

        } else {

            save_input_data();
            if(!is_already_in_use('password',sha1($password),'users')){
                set_flash("Mot de Pass incorect", "warning");
            }
            if(!is_already_in_use('Login',$login,'users'))
            {
                set_flash("Login incorrect", "warning");
            }
            if(!is_already_in_use('password',sha1($password),'users')
                &&!is_already_in_use('login',$login,'users')){
                set_flash("Login et Mot de Pass incorrects", "warning");
            }
        }
    } else {
        $errors[] = "Veuillez, remplir tous les champs";
        //--On sauvegarde les valeurs en session
        save_input_data();
    }
} else {
    clear_input_data();
}

require_once("views/login.view.php");
