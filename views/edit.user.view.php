<?php $title = "Edition de Profile" ?>
<?php require_once("includes/constants.php"); ?>
<?php require_once("partials/_header.php"); ?>
<?php if(!empty($_GET['id'])&&$_GET['id']===get_session('user_id')):?>
<div class="update-form-container">
    <h3>Update Profile</h3>

    <p>Please fill this form, to update your profile</p>
    <!--Pour afficher les messages d'erreurs-->
    <?php require_once('partials/_errors.php'); ?>
    <!---------------------------------------->
    <hr>
    <form action="" autocomplete="off" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email.."
               value="<?= get_input('email') ?: e($user->email) ?>">

        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Your city.."
               value="<?= get_input('city') ?: e($user->city) ?>">

        <label for="country">Country</label>
        <input type="text" id="country" name="country" placeholder="Your country.."
               value="<?= get_input('country') ?: e($user->country) ?>">

        <label for="sex">Sexe</label>
        <select id="sex" name="sex">
            <option value="H" <?= $user->sex == 'H' ? "selected" : "" ?>>Homme</option>
            <option value="F" <?= $user->sex == 'F' ? "selected" : "" ?>>Femme</option>
        </select>


        <label for="twitter">Twitter</label>
        <input type="text" id="twitter" name="twitter" placeholder="Your twitter.."
               value="<?= get_input('twitter') ?: e($user->twitter) ?>">

        <label for="twitter">Github</label>
        <input type="text" id="github" name="github" placeholder="Your github.."
               value="<?= get_input('github') ?: e($user->github) ?>">


        <input type="checkbox" id="available_for_hiring"
               name="available_for_hiring" <?= $user->available_for_hiring ? "checked" : "" ?>>
        <label for="available_for_hiring">Disponible pour emploi</label>
        <br/><br/>
        <label for="bio">Biographie</label>
        <textarea id="bio" name="bio" placeholder="Write something.."
                  style="height:200px"><?= get_input('bio') ?: e($user->bio) ?></textarea>
        <input type="submit" value="update" name="update">
    </form>
</div>
<?php endif;?>
<?php require_once("partials/_footer.php"); ?>
