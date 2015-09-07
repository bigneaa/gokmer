<div id="login" class="well col-md-offset-8 col-md-3 hide">
    <form class="form-horizontal" role="form" id="form_login" action="index.php" method="post" name="loginform">
        <fieldset>
            <legend class="hidden">
                CONNEXION
            </legend>
            <div class="form-group">
                <label for="login">Nom : <?php echo WORDING_USERNAME; ?></label>
                <input id="user_name" class="form-control" placeholder="email" type="text" name="user_name">
            </div>
            <div class="form-group">
                <label for="password">Password : <?php echo WORDING_PASSWORD; ?> </label>
                <input id="user_password" class="form-control" placeholder="mot de passe" type="password"
                       name="user_password" autocomplete="off" required>
            </div>
        </fieldset>
        <div class="input-group">
            <div class="input-group-addon">
                <input type="checkbox" name="user_rememberme" id="user_rememberme" title="Remember Me" value="1">
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="login" size="15"
                   value="<?php echo WORDING_LOGIN; ?>">
        </div>
        </fieldset>
        <hr style="margin:10px 0 5px 0">
        <small>Connexion rapide</small>
        <div id="social-icon" class="icon-bar">
            <a href="#" class="btn" title="Connexion avec facebook"><img class="fb" alt="facebook"
                                                                         src="images/facebook.png"> </a>
            <a href="#" class="btn" title="Connexion avec g+"><img class="g+" alt="google-plus"
                                                                   src="images/google-plus.png"> </a>
        </div>

    </form>
</div>
