<?php

define("TAILLE_FICHIER", 1000000 /* , TRUE */); // TRUE pour définition insensible à la casse

extract($_POST);
extract($_FILES);

//echo 'la photo est ' . $photo['name'];
require 'scripts/connectDB.inc.php';

$connex = connexion('bussness');

if (isset($nomProprio) && !empty($nomProprio) && isset($nomProduit) && !empty($nomProduit) &&
    isset($prix) && !empty($prix) && isset($telephone) && !empty($telephone)
) {


    $idProduit = "";
    $nomProduit = $connex->escape_string($nomProduit);
    $nomProprio = $connex->escape_string($nomProprio);
    $prix = $connex->escape_string($prix);
    $telephone = $connex->escape_string($telephone);
    $description = $connex->escape_string($description);

    if (isset($photo['name']) && $photo['error'] == 0) {
// Testons si le fichier n’est pas trop gros
        if ($photo['size'] <= TAILLE_FICHIER) {
// Testons si l’extension est autorisée
            $infosfichier = pathinfo($photo['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
// On peut valider le fichier et le stocker définitivement
                move_uploaded_file($photo['tmp_name'], '../img' . basename($photo['name']));
                echo "envoyé!";
            } else {
                echo 'echec d envoie de ' . $photo['name'];
            }
        }
    }
    $nomPhoto = $photo['name'];

    $sql = "insert into produit values ('$idProduit', '$nomProduit' , '$prix' , '$categorie' , '$etat' , '$vente' , '$description' , '$nomPhoto' , '$nomProprio' , '$telephone')";
    $result = $connex->query($sql);
    header("Location : ../../../bussness.php");
    if (!$result) {
        echo $connex->errno;
        echo $connex->error;
        echo "<script type=\"text/javascript\">
        alert('Erreur : " . $connex->error . "')</script>";
    } else {
        echo "<script type=\"text/javascript\">
                alert('Vous êtes enregistré Votre numéro de client est : " . $connex->insert_id . "')</script>";
    }
} else {
    echo "<h3>Formulaire à compléter!</h3>";
    echo "les param sont incorectes";
}

$connex->close();
?>

