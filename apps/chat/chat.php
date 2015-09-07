<?php

extract($_POST);
//$format = 'd-m-y, H:i:s';
//$date = date($format);
require_once '../../scripts/connectDB.inc.php';
//$pseudo = "invite";
$base = "chat";

$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if (!$ajax) {
    exit(1);
}
if (isset($pseudo) && !empty($pseudo)) {
    if (isset($msg) && !empty($msg)) {

        $connex = connexion($base);
        if (!$connex) {
            echo 'connexion impossible';
            exit(1);
        }
        $pseudo = $connex->escape_string($pseudo);

        $msg = htmlentities($msg);
        $sql1 = "select count(*) as nombre from personne WHERE pseudo = '$pseudo' LIMIT 1";
        $res1 = $connex->query($sql1);
        if (!$res1) {
            echo 'lecture impossible';
        } else {
            $row1 = $res1->fetch_assoc();
            $nb = $row1['nombre'];
            //echo 'nombre : '.$nb;
            if ($nb == 0) {
                $sql2 = "insert into personne(pseudo) values ('$pseudo')";
                $connex->query($sql2);
            }
            $sql3 = "select id from personne WHERE pseudo = '$pseudo'";
            $res3 = $connex->query($sql3);
            if (!$res3) {
                die ('selection impossible' . "Erreur : no:$connex->errno error-message: $connex->error");
            }
            $row3 = $res3->fetch_assoc();
            $idPerson = $row3["id"];
            //echo "id : $idPerson <br>";      
            $sql4 = "insert into message values ('' , '$msg' , now() , '$idPerson' , '')";
            $res = $connex->query($sql4);
            if (!$res) {
                die ('selection impossible' . "Erreur : no:$connex->errno error-message: $connex->error");
            } else {
                $sql5 = "SELECT * FROM message WHERE idPersonne = '$idPerson' OR idDestinataire = '$idPerson' ORDER BY datePostage ASC LIMIT 10  ";
                $res5 = $connex->query($sql5);
                while ($row5 = $res5->fetch_object()) {
                    echo '<p>' . $row5->msg . ''
                        . '<br><small> Envoyer par : ' . $row5->idPersonne . ' à ' . $row5->idDestinataire . '</small>'
                        . '</p>';
                    echo "<script type='text/javascript'>"
                        . " console.log('Vous êtes enregistré Votre numéro de client est : $connex->insert_id')"
                        . "</script>";

                }
            }
        }
    } else {
        exit(1);
    }
} else {
    die("donnez un pseudo svp.");
}
$connex->close();
?>

