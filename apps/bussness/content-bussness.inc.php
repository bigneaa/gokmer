<?php
/**
 * Created by PhpStorm.
 * User: AURELIO
 * Date: 06.04.2015
 * Time: 00:36
 */
?>
<div id="bussness-nav " class="navbar navbar-default" style=" padding: 7px 0 0 0;">
    <div class="triage">
        <div class="pull-left col-md-3">
            <div class="input-group ">
                <span class="btn btn-default input-group-addon">Trier par </span>
                <select class="form-control">
                    <option value="date<">Date</option>
                    <option value="categorie">Categorie</option>
                    <option value="prix<">Prix</option>
                </select>
                <span class="input-group-addon" style="padding: 0px;">                 
                    <button class="btn btn-default croissant" title="croissant" style="padding: 5px 5px !important;">
                        /\
                    </button>
                    <button class="btn  btn-default decroissant" title="decroissant"
                            style="padding: 5px 5px !important;">\/
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div>
        <div class="col-md-4 col-md-offset-1">
            <div class="input-group ">
                <span class="btn btn-default input-group-addon">Vente </span>
                <select class="vente form-control">
                    <option value="boutique">Boutique</option>
                    <option value="occasion">Occasion</option>
                    <option value="enchere">Enchere</option>
                </select>
                <span class="btn btn-default input-group-addon">Etat </span>
                <select class="etat form-control">
                    <option value="Neuf<">Neuf</option>
                    <option value="Vieuf">Vieuf</option>
                </select>
            </div>
        </div>
    </div>
    <div class="pull-right col-md-4">
        <div class="input-group ">
            <span class="btn btn-default input-group-addon">Affichage </span>
            <select class="afficage form-control">
                <option value="1">1 colonne</option>
                <option value="2">2 colonnes</option>
                <option value="3">3 colonnes</option>
                <option></option>
            </select>
            <span class="input-group-addon">/</span>
            <select class="form-control">
                <option value="10">10 articles</option>
                <option value="20">20 articles</option>
                <option value="30">30 articles</option>
                <option value="40">40 articles</option>
                <option value="50">50 articles</option>
                <option value="100">100 articles</option>
            </select>
        </div>
        <div class="pull-left col-md-5 " style="padding:0px; display: inline;">


        </div>
    </div>
</div>
</div>

<!--
////////////////////////////////////////////////////////////////////////////
-->
<div class="row">
    <div id="produit" class="col-md-10 col-md-offset-1">
        <?php
        include 'scripts/bussness_chasseur.inc.php';
        ?>
    </div>

    <!--    
    ////////////////////////////////////////////////////////////////////////////
    -->
    <!--
    <iframe id="content_frame" name="content" src=""  scrolling="yes" onload="AdjustIframeHeightOnLoad()">

    </iframe>
    <script type="text/javascript">
        function AdjustIframeHeightOnLoad() { document.getElementById("content").style.height = document.getElementById("content").contentWindow.document.body.scrollHeight + "px"; }
        function AdjustIframeHeight(i) { document.getElementById("content").style.height = parseInt(i) + "px"; }
    </script>
    -->
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form id="form_bussness" role='form' class="col-md-10 col-md-offset-1 form-horizontal"
              enctype="multipart/form-data" action="scripts/bussness_postage.inc.php" method="post">
            <fieldset>
                <legend><h3>poster vos produits</h3></legend>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" id="max_file_size">

                <div class="form-group">
                    <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                                Nom</span>
                            <input class="form-control" type="text" placeholder="Nom du propriétaire" name="nomProprio"
                                   id="nomProprio">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-gift"></span>
                                Nom</span>
                            <input class="form-control" type="text" placeholder="Nom du produit" name="nomProduit"
                                   id="nomProduit"></div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="input-group">   
                            <span class=" input-group-addon">
                                <span class="glyphicon glyphicon-phone"></span>
                                Tél</span>
                            <span class="input-group-addon">6</span>
                            <input class="form-control" type="tel" placeholder="telephone" name="telephone"
                                   id="telephone">

                        </div>
                        <div class="input-group">
                            <input class="form-control" type="number" placeholder="prix" name="prix" id="prix">
                            <span class="input-group-addon">fcfa
                                <span class="glyphicon glyphicon-yen"></span>
                            </span>

                        </div>
                    </div>
                    <div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <label for="categorie" class="input-group-addon" title="Categorie">
                                    <span class="glyphicon glyphicon-grain"></span>
                                    Categrie&nbsp;&nbsp;</label>
                                <select class="form-control" name="categorie" title="Categorie">
                                    <option value="informatique">informatique</option>
                                    <option value="automoblie">automoblie</option>
                                    <option value="agriculture">agriculture</option>
                                    <option value="alimentation">alimentation</option>
                                    <option value="machine">machine</option>
                                    <option value="chaussure">chaussure</option>
                                    <option value="vetement">vetement</option>
                                    <option value="electromenager">élèctromenager</option>
                                    <option value="electriciter">élèctriciter</option>
                                    <option value="electronique">élèctronique</option>
                                    <option val value="e=" me
                                    "ue="mecanique" >mécanique</option>
                                    <option value="autres">autres</option>
                                    <optgroup>
                                        <option value="offre emploi">offre D'emploi</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3" style="padding-left: 0px;">
                            <div class="input-group">
                                <label for="etat" class="input-group-addon" title="etat du produit">Etat</label>
                                <select class="form-control" name="etat" title="etat du produit" id="etat">
                                    <option value="neuf">neuf</option>
                                    <option value="utilise">utilisé</option>
                                    <option value="vieux">vieux</option>
                                    <option value="defectieux">défèctieux</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label for="vente" class="input-group-addon" title="type de vente">Vente</label>
                                <select class="form-control" name="vente" title="type de vente">
                                    <option value="boutique">boutique</option>
                                    <option value="occasion">occasion</option>
                                    <option value="enchere">enchère</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-8">
                            <div class="input-group ">
                                <span class="input-group-addon"><label class="sr-only" for="photo">Photo du
                                        produit</label>
                                    <input class="" accept="image/jpeg" type="file" name="photo" id="photo"
                                           title="Photo du produit"></span>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="1" maxlength="100" name="description" id="description"
                                  placeholder="description du produit"></textarea>
                    </div>
                </div>
            </fieldset>
            <div>
                <button class="btn btn-primary" type="submit">Poster le produit</button>
                <button class="btn btn-default" type="reset">reset</button>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>