   $.ajax({
        url: "control_listArticle.php"
    }).done(function (msg) {    
            $("#listArticle").html(msg);
        }
   );
