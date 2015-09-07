<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function connexion($base)
{
    include_once("mysql_param.inc.php");
    $idcom = new mysqli(MYHOST, MYUSER, MYPASS, $base);
    if (!$idcom) {
        echo "<script type=text/javascript>";
        echo "alert('Connexion Impossible à la base')</script>";
        exit();
    }
    return $idcom;
}

?>