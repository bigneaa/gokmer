<div class="row">
    <div id="header_navbar_topfixed" class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <span>GO
                    <img class="img-responsive" alt="KMER" src="images/kmer.png">
                </span>
                <span id="salutation"></span>
            </a>
        </div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <!--
        <ul class="nav navbar-nav nav-pills pull-right">
            <li><a class="btn btn-default " href="#">Connexion </a></li>
            <li><a class="btn btn-default "href="#">Inscription</a></li>
            <li></li>
        </ul>
        -->
        <div class="pull-right btn-group">
            <a class="btn btn-info navbar-btn " href="#" id="connexion-btn">Connexion</a>
            <a class="btn btn-default navbar-btn" id="inscription-btn" href="#" data-toggle="modal"
               data-target="#myModal">Inscription </a>
            <a class="btn btn-link navbar-btn" id="restoreMdp-btn" href="password_reset.php">Mot de passe oublié? </a>
        </div>
    </div>
</div>
<div id="header-middle" class="row clearfix">
    <div class="col-md-12 ">
        <div id="banniere-img" class="col-md-6">
            <img class="img-rounded" id="logo_neaa" src="images/neaa_logo.png" style="border-bottom: 2px solid;">
        </div>
        <div class="col-md-6" style="padding-top: 50px;">
            <h1 class="sujet"><?php echo $_SESSION['apps']; ?></h1>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>

<div class="row">
    <?php
    // show potential errors / feedback (from login object)
    if (isset($login)) {
        if ($login->errors) {
            foreach ($login->errors as $error) {
                echo $error;
            }
        }
        if ($login->messages) {
            foreach ($login->messages as $message) {
                echo $message;
            }
        }
    }
    ?>

    <?php
    // show potential errors / feedback (from registration object)
    if (isset($registration)) {
        if ($registration->errors) {
            foreach ($registration->errors as $error) {
                echo $error;
            }
        }
        if ($registration->messages) {
            foreach ($registration->messages as $message) {
                echo $message;
            }
        }
    }
    ?>
</div>