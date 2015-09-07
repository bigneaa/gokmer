$(document).ready(function () {
    $("#chat").draggable(); // plugin jQuery draggable
    $("#chat-text").empty();
    $("#chat-menu .btn_status").click(
        function (event) {
            event.preventDefault;
            $("#chat-param").toggleClass("hidden");
        });
    $(".toogleChatView").click(function () {
        $("#chat-text , #chat-smiley").toggle();
    });
    $("#chat-msg").click(function () {
        $(this).focus();
    });
    $("#chat-param input[type=radio]").click(
        function () {
            var val = $(this).val();
            var button = $("#chat-menu .btn_status");
            if (val === "online") {
                button.find("b").text("online");
                //button.toggleClass("btn-success" , "btn-danger");
                button.removeClass("btn-warning");
                button.addClass("btn-success");
            } else if (val === "offline") {
                button.find("b").text("offline");
                //button.toggleClass("btn-danger" , "btn-success");
                button.removeClass("btn-success");
                button.addClass("btn-warning");
            }
        });
    $("#chat_form").submit(function (e) {
        e.preventDefault();
        $form = $(this);
        var message = $form.find("#chat-msg").val();
        var url = $form.attr("action");
        console.log("envoyer a :" + url);
        var $pseudo = $("#chat input[name=pseudo]");
        if ($pseudo.val() === "") {
            $("#chat-param").removeClass("hidden");
            //$pseudo.addClass("error-input");
            $pseudo.attr("placeholder", "champ obligatoire !!!");
            $pseudo.focus();
        }
        var params = {
            pseudo: $pseudo.val(),
            msg: message
        };
        if (message !== "") {
            $("#btn_chatter").val(". . . .");
            $.post(url, params, function (data) {
                console.log("data : " + data);
                $("#chat-text").html(data);
            })
                .fail(function (jqxhr) {
                    alert('echouer :' + jqxhr);
                })
                .always(function () {
                    $("#btn_chatter").val("chatter");
                    $("#chat-msg").val("");
                });
            return false;
        }
    });
});
