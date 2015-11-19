
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Document</title>

    </head>

    <body>
        <?php
        session_start();
        extract($_POST);
        $user = $_POST['login'];
        $password = $_POST['pwd'];
        
        if(empty($password)) {
          
        }
        
        $recupUser = "administrateur";

        $query = sprintf("SELECT * FROM user WHERE login = '%s' AND password = '%s'",
                mysql_real_escape_string($user),
                mysql_real_escape_string(sha1($password)));
        require("sgbdconnec.php");
        
// Rendre la base de données aston, la base courante
        $db_selected = mysql_select_db('aston', $link);
        if (!$db_selected) {
            die('Impossible de sélectionner la base de données : ' . mysql_error());
        }



        $result = mysql_query($query);
        if (!$result) {
            $message = 'Requête invalide : ' . mysql_error() . "\n";
            $message .= 'Requête complète : ' . $query;
            die($message);
        }
        $row = mysql_fetch_array($result);
        if (!$row) {
            die("table vide");
            header('Location: index.php');
        }

        $rpassword = $row['password'];


        if ($rpassword == sha1($password)) {
            if ($user == "administrateur") {
                $_SESSION['login'] = $user;
                header('Location: pageBackoffice.php');
            } else {
                $_SESSION['login'] = $user;

                header('Location: pageUtilisateur.php');
            }
        } else {
            
        }
        mysql_close();
        ?>                               


    </body>

</html>


