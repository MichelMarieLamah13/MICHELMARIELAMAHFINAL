<nav>
    <label for="menu-mobile" class="menu-mobile">Menu</label>
    <input type="checkbox" id="menu-mobile" role="button">
    <ul>
        <li class="menu-acceuil <?= set_active("index.php") ?>"><a href="index.php">Acceuil</a></li>
        <?php if (is_logged_in()): ?>
            <li class="menu-html <?= set_active("html.php") ?>"><a href="html.php">HTML</a>
                <ul class="submenu">
                    <li><a href="#">Cours complets</a></li>
                    <li><a href="#">Eléments</a></li>
                    <li><a href="#">Attributs</a></li>
                    <li><a href="#">Exercices</a></li>
                </ul>
            </li>
            <li class="menu-css <?= set_active("css.view.php") ?>"><a href="css.php">CSS</a>
                <ul class="submenu">
                    <li><a href="#">Cours complet</a></li>
                    <li><a href="#">Propriétés</a></li>
                    <li><a href="#">Sélecteurs</a></li>
                    <li><a href="#">Exercices</a></li>
                </ul>
            </li>
            <li class="menu-js <?= set_active("js.php") ?>"><a href="js.php">JavaScript</a>
                <ul class="submenu">
                    <li><a href="#">Cours complets</a></li>
                    <li><a href="#">Fonctions</a></li>
                    <li><a href="#">Le DOM</a></li>
                    <li><a href="#">Exercices</a></li>
                </ul>
            </li>
            <li class="menu-php <?= set_active("php.php") ?>"><a href="php.php">PHP</a>
                <ul class="submenu">
                    <li><a href="#">Cours complets</a></li>
                    <li><a href="#">Fonctions</a></li>
                    <li><a href="#">POO</a></li>
                    <li><a href="#">Exercices</a></li>
                </ul>
            </li>
            <li class="menu-logout <?= set_active("logout.php") ?>"><a href="logout.php">Deconnexion</a></li>
            <li class="menu-profile <?= set_active("edit.user.php") ?>"><a href="edit.user.php?id=<?=get_session('user_id')?>">Editer Mon profil</a></li>
            <li class="menu-profile <?= set_active("profile.php") ?>"><a href="profile.php?id=<?=get_session('user_id')?>">Votre Espace</a></li>
        <?php else: ?>
            <li class="menu-login <?= set_active("login.php") ?>"><a href="login.php">Connexion</a></li>
            <li class="menu-register <?= set_active("register.php") ?>"><a href="register.php">Inscription</a></li>
        <?php endif; ?>
    </ul>
</nav>