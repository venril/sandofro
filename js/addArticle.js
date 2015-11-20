/* Ajout d'article
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#addNews').on('click', function () {
    var sauteurArticle = $('#auteur').val();
    var ddateParution = $('#dateParution').val();
    var sarticle = $('#').val();

    $.ajax({
        method: "POST",
        url: "control_addNews.php",
        data: {
            auteurAdd: sauteurArticle,
            dateAdd: sarticle,
            articleAdd: ddateParution,
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