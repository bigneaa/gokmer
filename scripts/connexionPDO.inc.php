<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function connexionPDO($base)
{

    //Inclusion des paramètres de connexion
    include_once("mysql_param.inc.php");
//Connexion au serveur
    $dsn = "mysql:host=" . MYHOST . ";dbname=" . $base;
    $user = MYUSER;
    $pass = MYPASS;
    $idcom = new PDO($dsn, $user, $pass);
//Contrôle de la connexion
    if (!$idcom) {
        echo "<script type=text/javascript>";
        echo "alert('Connexion Impossible à la base')</script>";
        exit();
    }
    return $idcom;
}

?>