<?php
$_SESSION['title'] = "GO CAMEROON : LA TOILE DU CAMEROUN, ici c'est le K-Mer";
$_SESSION['apps'] = "GO KMER";
?>

<!doctype html>
<html class="no-js" lang="fr">
<head>
    <?php
    include_once("_head.php");
    ?>
</head>
<body>
<div class="container">
    <div id="top" class="row">
        <?php
        include_once("_header.php");
        ?>
        <?php include_once('connexion.inc.php'); ?>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div class="row" >
        <div class="col-md-4">&nbsp;</div>
        <div id="registerForm" class="col-md-7" >
            <!-- show registration form, but only if we didn't submit already -->
            <?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
                <div class="row alert alert-success" >
                    <h3 class="text-left text-muted">Inscription</h3>
                </div>
                <?php
                include_once'views/inscription.inc.php';
            } else {
                include_once'views/register-success.inc.php';
            }

            ?>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div id="bottom" class="row">
        <?php
        include_once("_footer.php");
        ?>
    </div>

</div>
<?php include_once("modal-box.php"); ?>



<?php include_once '_foot.htm'; ?>


</body>

</html>