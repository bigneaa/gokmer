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
        <?php include('connexion.inc.php'); ?>
    </div>
    <div class="row">
        <!--[if lt IE 8]>
        <p class="browserupgrade row">You are using an <strong>outdated</strong> browser. Please <a
            href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        include_once("apps.php");
        ?>
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
<?php include_once("modal-box.htm"); ?>



<?php include_once '_foot.htm'; ?>


</body>

</html>








