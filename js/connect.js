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
        if (msg == '0') {
            document.location.href = "pageBackoffice.php";
        }
        if (msg == '1') {
            document.location.href = "pageUtilisateur.php";
        } else {
            $("#resultatAjax").html(msg)
        }
    });
});