/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#ident').on('click', function () {
    var slogIn = $('#login').val();
    var smdp = $('#mdp').val();

    $.ajax({
        method: "POST",
        url: "control_connexion.php",
        data: {
            login: slogIn,
            pwd: smdp
        },
    }).done(function (msg) {
        
        if (msg == "parfait") {
            document.location.href = "pageBackoffice.php";
        }
        if (msg == "ok") {
            document.location.href = "pageUtilisateur.php";
        } else {
            $("#resultatAjax").html(msg)
        }
    });
});