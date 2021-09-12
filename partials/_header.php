<?php require_once("includes/constants.php"); ?>
<?php require_once("includes/functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        <?= isset($title)
            ? $title . ' - ' . WEBSITE_NAME
            : WEBSITE_NAME . ' - Du lourd et agreable'
        ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <?php if ($title == 'Inscription' || $title == 'Connexion'): ?>
        <link rel="stylesheet" href="assets/css/_form.css">
    <?php endif; ?>
    <link rel="stylesheet" href="assets/css/_form.update.css">
    <link rel="stylesheet" href="assets/css/_profile.card.css">
    <link rel="stylesheet" href="assets/css/_errors.css">
    <link rel="stylesheet" href="librairies/icon/fontawesome-pro/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="header-img">
        <h1>
            <?php if (is_logged_in()): ?>
                <div class="chip">
                    <img src="media/img/img_avatar.png" alt="Person" width="96" height="96">
                    <?= get_session('lname') ?> <?= get_session('fname') ?>
                </div>
            <?php endif; ?>
            <div class="header-right">
                <a class="header-active" href="index.php">Home</a>
                <?php if (is_logged_in()): ?>
                    <a href="logout.php">Deconnexion</a>
                <?php else : ?>
                    <a href="login.php">Connexion</a>
                    <a href="register.php">Inscription</a>
                <?php endif; ?>
            </div>
        </h1>
        <h1 style="color:black;">PROGRAMMATION WEB</h1>

        <h1 ><img src="media/img/menu.png" alt="Logo"></h1>

        <h2 style="color:black;">HTML|CSS|JAVASCRIPT|PHP</h2>
    </div>
    <?php require_once("partials/_nav.php"); ?>
    <?php require_once("partials/_flash.php"); ?>


