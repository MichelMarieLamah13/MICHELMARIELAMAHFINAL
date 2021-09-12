<?php
session_start();
require_once('config/database.php');
require_once('includes/functions.php');
require_once('filters/auth.filter.php');

//--On teste l'existence de l'id dans l'adresse
if (!empty($_GET['id']) && $_GET['id']===get_session('user_id')) {
    //--Si l'id existe, on recupère les données en bd
    $user = find_user('id', $_GET['id'], 'users');
    if (!$user) {
        redirect('index.php');
    }

} else {
    
    //--Si l'id n'existe pas, on le redirige avec les bons
    redirect("profile.php?id=" . get_session('user_id'));
}

if (isset($_POST['update'])) {
    $errors = [];
//--Si tous les champs ne sont pas vides
    if (not_empty([$_POST['email'], $_POST['city'],
        $_POST['country'], $_POST['sex'], $_POST['bio']])) {
        extract($_POST);
//---Requete pour selectionner les users
//--Ayant l'email ou le pseudo
        $q = $db->prepare("UPDATE users
SET email=:email, city=:city, country=:country,
sex=:sex,github=:github,twitter=:twitter,
available_for_hiring=:available_for_hiring,bio=:bio
WHERE id=:id
");
        $q->execute([
            'email' => $email,
            'city' => $city,
            'country' => $country,
            'sex' => $sex,
            'twitter' => $twitter,
            'github' => $github,
            'available_for_hiring' => !empty($available_for_hiring) ? '1' : '0',
            'bio' => $bio,
            'id' => get_session('user_id')
        ]);
        set_flash('Votre profile a été mis à jour avec succes', 'info');
        redirect("profile.php?id=" . get_session("user_id"));
    } else {
        $errors[] = "Veuillez, remplir tous les champs";
//--On sauvegarde les valeurs en session
        save_input_data();
    }
} else {
    clear_input_data();
}
require_once("views/edit.user.view.php");
