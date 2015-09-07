<?php
$_SESSION['title'] = "GO CAMEROON : LA TOILE DU CAMEROUN, ici c'est le K-Mer";
$_SESSION['apps'] = "GO KMER";
?>

<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $_SESSION['title']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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








