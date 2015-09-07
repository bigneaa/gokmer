<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'scripts/connectDB.inc.php';

$connex = connexion('bussness');
$limit = 10;

$sql = "SELECT * FROM produit ORDER BY id DESC LIMIT 10";
$result = $connex->query($sql);
if (!$result) {
    die ('selection impossible' . "Erreur : no:$connex->errno error-message: $connex->error");
} else {
    while ($ligne = mysqli_fetch_object($result)) {
        ?>
        <div class='item col-md-5 col-md-offset-1'>
            <div class="col-md-4 ">
                <img src="uploads/<?php echo $ligne->image; ?>" alt="go kmer bussness"
                     class="img-responsive img-thumbnail">
                <?php echo $ligne->image; ?>
            </div>
            <div class="col-md-8 ">
                <div>
                    <span>nom: <?php echo htmlentities($ligne->nomProduit); ?></span>&nbsp;<span>prix <?php echo htmlentities($ligne->prix); ?></span>&nbsp;
                    <span>vente: <?php echo htmlentities($ligne->vente); ?></span>&nbsp;<span>etat <?php echo htmlentities($ligne->etat); ?></span>
                    &nbsp;<span>categorie <?php echo htmlentities($ligne->categorie); ?></span>
                </div>
                <div>
                    <?php echo $ligne->description; ?>
                </div>
                <div class="vendeur">
                    <h4>Le vendeur</h4>
                    <span>nom: <?php echo htmlentities($ligne->nomProprietaire); ?></span>&nbsp;<br><span>telephone <?php echo htmlentities($ligne->telephone); ?></span>&nbsp;

                </div>
            </div>
        </div>
        <?php
        //$content = "<p class=' col-md-5 col-md-offset-1'> Nom Produit : " . $ligne->nomProduit . "<br> Nom proprietaire : " . $ligne->nomProprietaire . "<br>";
        //echo $content;
        /*
          echo '<script>
          $(function() {
          alert("ok");
          $("#produit").append("'.$content.'");
          })
          </script>';
         */
    }
    $result->free_result();
    $connex->close();
}

