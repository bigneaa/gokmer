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
    </div>
    <div id="middle" class="row">
        <!--[if lt IE 8]>
    <p class="browserupgrade row">You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <?php
        // if you need the user's information, just put them into the $_SESSION variable and output them here
        echo WORDING_YOU_ARE_LOGGED_IN_AS . htmlspecialchars($_SESSION['user_name']) . "<br />";
        //echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->user_gravatar_image_url . '" />;
        echo WORDING_PROFILE_PICTURE . '<br/>' . $login->user_gravatar_image_tag;
        ?>

        <div>
            <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
            <a href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a>
        </div>
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








