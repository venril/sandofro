$('#addNews').on('click', function () {
    var sauteurArticle = $('#auteurAddNews').val();
    var ddateParution = $('#dateAddNews').val();
    var sarticle = $('#textAddNews').val();
    alert("date parution "+ddateParution+" article "+sarticle);
    $.ajax({
        method: "POST",
        url: "control_addNews.php",
        data: {
            auteurAdd: sauteurArticle,
            dateAdd: ddateParution,
            articleAdd: sarticle,
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