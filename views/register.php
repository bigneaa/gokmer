<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
    <div id="registration">
        <form class="form-horizontal" role="form" id="form_registration" action="register.php" method="post" name="registerform">
            <div class="modal-body">
                <div class="alert alert-warning ">
                    <span >un text d erreur</span>
                    <button class="close"><small>x</small></button>
                </div>
            <fieldset>
                <legend class=""></legend>
                <div class="row col-md-offset-1">
                    <div class="form-group  col-md-5 ">
                        <label for="nom">Nom : </label>
                        <input id="user_name" class="form-control" placeholder="nom" type="text" pattern="[a-zA-Z0-9]{2,64}"  name="user_name" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-5 ">
                        <label for="prenom">Prenom : </label>
                        <input id="prenom" class="form-control" placeholder="prenom" type="text" name="prenom" required>
                    </div>
                </div>
                <div class="row col-md-offset-1">
                    <div class="form-group col-md-5">
                        <label for="email">Email : </label>
                        <input id="user_email" class="form-control" placeholder="email valide" type="email" name="user_email" required>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="form-group col-md-5 sexe">
                        <label>sexe : </label>
                        <div class="form-control checkbox-inline">
                            <label for="homme"><input id="homme" class="radio-inline" type="radio" name="sexe" value="H" aria-selected>&nbsp;Homme</label>
                            <label for="femme"><input id="femme" class="radio-inline" type="radio" name="sexe" value="F">&nbsp;Femme</label>
                        </div>
                    </div>
                </div>
                <div class="row col-md-offset-1">
                    <div class="form-group col-md-5">
                        <label for="password">Mot de passe : </label>
                        <input id="user_password_new" class="form-control" placeholder="mot de passe" type="password" name="user_password_new"
                               pattern=".{6,}" autocomplete="off" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-5">
                        <label for="password">confirmation : </label>
                        <input id="user_password_repeat" class="form-control" placeholder="mot de passe" type="password" name="user_password_repeat"
                               pattern=".{6,}" autocomplete="off" required>
                    </div>
                </div>

                <div class="row col-md-offset-1">
                    <div class="form-group col-md-5">
                        <label for="user_country">Pays : </label>
                        <input id="user_country" class="form-control" placeholder="nationalite" type="text" name="user_country">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-5">
                        <label for="user_city">Ville : </label>
                        <input id="user_city" class="form-control" placeholder="d'ou?" type="text" name="user_city">
                    </div>
                </div>
                <div class="row col-md-offset-1">
                    <div class="form-group col-md-5 col-md-offset-1">
                <span class="input-group-addon">
                    <img src="tools/showCaptcha.php" alt="captcha"/>
                </span>
                        <input class="form-control" type="text" name="captcha" placeholder="completer le texte" required/>
                    </div></div>
            </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
                <button type="submit" class="btn btn-primary" name="register">
                    <?php echo WORDING_REGISTER; ?>
                </button>
            </div>
            <!--
                <div class="input-group">
                    <span class="input-group-addon">
                        Inscription
                    </span>
                    <input class="btn btn-primary btn-block" type="submit" size="15" name="envoyer" value="Connexion">
                </div>
            -->
        </form>
    </div>

<?php }else{?>
<div class="col-md-offset-2 col-md-8"></div>
    <div class="modal-body">
      <h1 class="text-center text-success text-capitalize">inscription reussite. </h1>
    </div>
    <div class="modal-footer">
    <a href="index.php" >
        <button type="submit" class="btn btn-block btn-success" name="register">
            <?php echo WORDING_BACK_TO_LOGIN; ?>
        </button>
    </a>
    </div>
<?php }?>