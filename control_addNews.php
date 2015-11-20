
        <?php
        session_start();
        extract($_POST);
        $auteur = $_POST['auteurAdd'];
        $article = $_POST['articleAdd'];
        $dateparution = $_POST['dateAdd'];
        $query2 ="INSERT INTO `aston`.`article` (`id`, `auteur`, `article`, `dateparution`) VALUES (NULL, 'toto', 'ttoo est bo', '2015-11-18')";
        $recupUser = "administrateur";
        
        $query = sprintf("INSERT INTO `aston`.`article` ( `id` , `auteur` ,`article`,`dateparution` ) VALUES ( NULL ,'%s','%s','%s')",
                mysql_real_escape_string($auteur),
                mysql_real_escape_string($article),
                mysql_real_escape_string($dateparution));

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
        // header('Location: .php');
        echo "parfait";
        ?>                               