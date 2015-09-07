<div id="upload" style="background-color: transparent" class="col-md-10 col-md-offset-1">
    <form class="upload form-horizontal" id="facematch_form" method="post" action="upload.php"
          enctype="multipart/form-data" name="upload-form">
        <fieldset>
            <legend>nouvelle photo</legend>
            <div class="form-group">
                <div class="col-md-6">
                    <div class="input-group ">
                        <label for="nom" class="input-group-addon">Nom de la persone</label>
                        <label for="civilite" class="input-group-addon sr-only">Civilite</label>
                        <select class="form-control input-group-addon" name="civilite" id="civilite"
                                style="display: inline;">
                            <option>Monsieur</option>
                            <option>Madame</option>
                        </select>
                        <input class="form-control" type="text" name="nom" id="nom">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label for="age" class="input-group-addon">Age</label>
                        <input class="form-control" type="text" name="age" id="age" placeholder="age majeur svp !">
                        <label for="age" class="input-group-addon">Contact</label>
                        <input class="form-control" type="number" name="contact" id="contact" placeholder="">

                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="photo" class="btn_photo input-group-addon btn btn-success ">
                        <img class="img-circle" src="apps/facematch/images/mes-images.png" width="40"> Choisir la photo
                        <input class="form-control-static hidden" type="file" name="photo" id="photo"></label>

                    <div class="input-group">
                        <label for="lst-groupe" class="input-group-addon">type d'habit :
                            <select class="form-control-static" name="groupe">
                                <option value="festival">festival</option>
                                <option value="maison" selected>maison</option>
                            </select></label>

                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div>&nbsp;</div>
                <div class="col-md-8 col-md-offset-2">
                    <input class="btn btn-primary btn-block" type="submit" value="envoyer"></div>
            </div>
        </fieldset>
    </form>
</div>


