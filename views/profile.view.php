<?php $title = "Profile" ?>
<?php require_once("includes/constants.php"); ?>
<?php require_once("partials/_header.php"); ?>

<div class="card">
    <img src="media/img/img_avatar2.png" alt="Avatar" style="width:100%">

    <div class="card-container">
        <div class="card-info gauche">
            <h4><b><?= e($user->login) ?></b></h4>

            <p>Web Designer</p>
            <h4>
                <b>
                    <?=
                    e($user->twitter)
                        ? '<i class="fas fa-envelope"></i>&nbsp;<a href="mailto:' . e($user->email) . '">' . e($user->email) . '</a>'
                        : "";
                    ?>
                </b>
            </h4>


            <p>
                <?=
                $user->city && $user->country
                    ? '<i class="fas fa-location"></i>&nbsp;' . e($user->city) . ' - ' . e($user->country)
                    : "";
                ?>

            </p>
            <a href="//google.com/maps?q=<?= e($user->city) ?>.' '.<?= e($user->country) ?>" target="_blank">Voir sur
                google maps</a>
        </div>

        <div class="card-info droite">
            <p>
                <?=
                e($user->twitter)
                    ? '<i class="fab fa-twitter"></i>&nbsp;<a href="http://twitter.com/' . e($user->twitter) . '">' . e($user->twitter) . '</a>'
                    : "";
                ?>

            </p>

            <p>
                <?=
                e($user->twitter)
                    ? ' <i class="fab fa-github"></i>&nbsp;<a href="http://github.com/' . e($user->github) . '">' . e($user->github) . '</a>'
                    : "";
                ?>

            </p>

            <p>
                <?=
                e($user->sex) == 'H'
                    ? '<i class="fas fa-male"></i>'
                    : '<i class="fas fa-female"></i>';
                ?>
                <?=
                e($user->available_for_hiring)
                    ? "Disponible pour emploi"
                    : "Non disponible pour emploi";
                ?>

            </p>
        </div>
    </div>
    <div class="card-container">
        <h4>Petite Biographie de <b><?= e($user->fname) ?> <?= e($user->lname) ?></b></h4>

        <p>
            <?=
            $user->bio ? nl2br(e($user->bio))
                : "Aucune biographie pour le moment...";
            ?>
        </p>
    </div>
</div>

<?php require_once("partials/_footer.php"); ?>
