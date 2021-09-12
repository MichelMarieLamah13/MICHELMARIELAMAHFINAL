<?php $title = "Acceuil" ?>
<?php require_once("includes/constants.php"); ?>
<?php require_once("partials/_header.php");?>
<div style="padding-left:16px" class="description">
    <h1 class="header"><?= WEBSITE_NAME ;?></h1>
    <p>
        <?= WEBSITE_NAME ;?> est le site web des développeurs Juniors ✉</br>
        Et qui dit développeurs juniors, dit également code source pour BB!✍<br>
        Grâce à cette plateforme, vous avez la possibilité de tisser des liens d'amitiés avec d'autres développeurs,
        échanger des codes sources, recevoir de l'aide si vous rencontrez des problèmes sur l'un de vos projets
        et bien plus encore! <br>
        Alors n'hésitez plus et <a href="register.php">rejoignez dès maintenant la communauté Jr </a> ☹
    </p>
    <a href="register.php" class="btn info">Créer un compte</a>
</div>

<?php require_once("partials/_footer.php");?>
