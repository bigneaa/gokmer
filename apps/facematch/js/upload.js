/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    content_switch(".faces", "#contenue");
    trigger_page_select(".btn_faces", ".faces", "#contenue");
    trigger_page_select(".btn_classement", ".classement", "#contenue");
    trigger_page_select(".btn_upload", ".upload", "#contenue");
    trigger_page_select(".btn_nouveauGroupe", ".nouveauGroupe", "#contenue");
});

function trigger_page_select(btn, content, target) {
    $(btn).click(function (e) {
        e.preventDefault();
        content_switch(content, target);
    });
}
function content_switch(content, target) {
    var defaultContent = $(content).html();
    console.log(defaultContent);
    $('#contenue').html(defaultContent);
}