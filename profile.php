<?php
session_start();
require_once('config/database.php');
require_once('includes/functions.php');
require_once('filters/auth.filter.php');
//--On teste l'existence de l'id dans l'adresse
if (!empty($_GET['id'])) {
    //--Si l'id existe, on recupère les données en bd
    $user = find_user('id', $_GET['id'], 'users');
    if (!$user) {
        redirect('index.php');
    }

} else {
    //--Si l'id n'existe pas, on le redirige avec les bons
    redirect("profile.php?id=" . get_session('user_id'));
}

require_once("views/profile.view.php");

