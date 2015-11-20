<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        session_start();

        if ($_SESSION['login'] == null) {
            header('location: index.php');
        }
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aston Ecole</title>

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body id="page-top" class="index">
        <?php
        include("headerC.php");
        ?>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <legend> Backoffice</legend>
                        <div class="intro-text">
                             <div class="container">
                <div class="row">
                    <div>
                        <legend> Ajouter une news</legend>
                        <div>

                            <div>
                                <form action="control_addNews.php" method="POST">

                                   <input style="color:red;" type="text" id="auteurAddNews" name="auteurAdd">
                                    <input style="color:red;" type="date" id="dateAddNews" name="dateAdd"> 
                                    <input style="color:red;" type="text" id="textAddNews" name="articleAdd" > 

<!--  <input style="color:blue;" type="submit" value="ENVOYER" /> -->

                                    <input style="color:blue;" id="addNews" type="button" value="AJOUTER" />

                                </form>

                            </div>
                            <div>
                                // afficher les articles
                                    <span id="listArticle"></span>                
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>




    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Aston Ecole 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="js/addArticle.js"></script>
    <script src="js/listArticle.js"></script>

</body>

</html>