$("document").ready(function () {
    $("#top").css("margin-top", $("#header_navbar_topfixed").height() + 2 + "px");
    $("#login").css("top", $("#header_navbar_topfixed").height() + 2 + "px");
    $("#top").css("margin-top", $("#header_navbar_topfixed").height() + 2 + "px");

    salutation();
    loginForm_toogler();
    verification_bussness_postage();
});


function salutation() {
    //alert("hallo");
    datenow = new Date();
    timenow = datenow.getTime();
    datenow.setTime(timenow);
    hournow = datenow.getHours();
    if (hournow > 18) {
        greeting = "Good Evening!";
    }
    else if (hournow > 12) {
        greeting = "Good Afternoon!";
    }
    else {
        greeting = "Good Morning!";
    }
    salut = $("#salutation").text();
    $("#salutation").text(" : " + greeting);
}


function loginForm_toogler() {
    $("#connexion-btn").click(function () {
        var margintop = $("#header_navbar_topfixed").height() + 2;
         $("#login").css("top", margintop + "px");
        $("#form_login").parent().toggleClass("show", "hide");
    });

}


function verification_bussness_postage() {
    $("#form_bussness").submit(function () {
        result = true;
        nomProduit = $("#nomProduit");
        nom = $("#nomProprio");
        prix = $("#prix");

        tel = $("#telephone");
        val = tel.val();
        val = parseInt(val);
        //alert(val +"type "+ typeof(val));

        if (nom.val() === "") {
            result = false;
            nom.addClass("error-input");
        } else {
            result = true;
            nom.removeClass("error-input");
            if (nomProduit.val() === "") {
                result = false;
                nomProduit.addClass("error-input");
            } else {
                result = true;
                nomProduit.removeClass("error-input");
                if (tel.val() === "" || isNaN(val)) {
                    result = false;
                    tel.addClass("error-input");
                } else {
                    result = true;
                    tel.removeClass("error-input");
                    if (prix.val() === "") {
                        result = false;
                        prix.addClass("error-input");
                    } else {
                        result = true;
                        prix.removeClass("error-input");
                    }
                }
            }
        }
        return result;
    });
}


function AdjustIframeHeightOnLoad() {
    document.getElementById("content").style.height = document.getElementById("content").contentWindow.document.body.scrollHeight + "px";
}


function AdjustIframeHeight(i) {
    document.getElementById("content").style.height = parseInt(i) + "px";
}
