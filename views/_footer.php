<?php
/**
 * Created by PhpStorm.
 * User: AURELIO
 * Date: 06.04.2015
 * Time: 00:31
 */
?>
<div class="col-lg-12">
    <div id="social-icon" class="col-md-4">
        <span> Nous suivre sur : </span>
        <img class="social_img" alt="facebook" src="images/facebook.png" title="nous sur facebook">
        <img class="social_img" alt="twitter" src="images/twitter.png" title="nous sur facebook">
        <img class="social_img" alt="google-plus" src="images/google-plus.png" title="nous sur facebook">
    </div>

    <!--
    <div id="search" class="HPanel">
        <form id="search-form" style="marign-bottom:5px">
            <input  type="text" size="40" value="rechercher dans le site" onclick="this.value = ''" placeholder="rechercher dans le site" >
            <input type="image" value="search" onclick="search()" src="images/search.png" >
        </form>
    </div>
    -->

    <div id="copyright" class="text-muted text-center">
        Copyright &copy; Nkumbe Aurelien 2014
    </div>
</div>


<!------------------ BLOCK MASQUE ET AFFICHER PAR UN EVENEMENT ------------------->


<div id="chat">
    <div id="chat-param" class="well hidden">
        <div class="input-group">
            <label for="pseudo" class="input-group-addon">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">Status&nbsp;&nbsp;</span>

            <div class="checkbox-inline form-control">
                <label><input type="radio" name="status" value="online" checked>&nbsp;dispo</label>&nbsp;&nbsp;
                <label><input type="radio" name="status" value="offline">&nbsp;occupé</label>
            </div>
        </div>

    </div>
    <div id="chat-group-box" class=" ">
        <ul id="chat-menu" class="nav  nav-tabs nav-tabs-justified">
            <li class="btn_status btn btn-success pull-left">
                <span class="glyphicon glyphicon-cog"></span>&nbsp;<b>online</b>
            </li>
            <li>

            </li>
            <li class="btn"><img src="images/comment.png" alt="X"/></li>
            <li class="btn pull-right" style="background-color: #eeb;">Whois</li>
        </ul>
        <div id="chat-text" class="" hidden="hidden">
            <P></P>

            <P>Aucun message</P>

            <P></P>
        </div>
        <div id="chat-smiley" class="nav navbar-default" hidden="hidden">les smileys ici</div>
    </div>

    <div class="chat-footer">
        <form class="form-inline" role="form" action="apps/chat/chat.php" name="chat_form" id="chat_form">
            <div class="input-group">
                <span class="input-group-addon btn toogleChatView">
                    <span class="caret"></span> msg
                </span>
                <input class="form-control" id="chat-msg" name="msg" type="text" placeholder="Chatter maintenant">
                <span class="input-group-btn " style="padding: 0">
                    <input type="submit" class="btn btn-info" id="btn_chatter" value="Chatter">
                </span>
            </div>
        </form>
    </div>
</div>




