
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>control d'ajout</title>

    </head>

    <body>
        <?php
        session_start();
        extract($_POST);
        $user = $_POST['login'];
        $password = $_POST['pwd'];
        $auteur = $_POST['auteur'];
        $article = $_POST['article'];
        
        $recupUser = "administrateur";
        $query = sprintf("INSERT INTO  `aston`.`login` ( `id` , `login` ,`password` )VALUES ( NULL ,'%s', SHA1('%s'))",
                mysql_real_escape_string($auteur),
                mysql_real_escape_string($article));
       
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
        mysql_close();
        header('Location: index.php');
        ?>                               
        

    </body>

</html>


