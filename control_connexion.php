
        <?php
        session_start();
        extract($_POST);
        $user = $_POST['login'];
        $password = $_POST['pwd'];
        $valTest = 0;
        
        if(empty($password)) { 
          echo "mot de passe vide";
          
        }
        
        $recupUser = "administrateur";

        $query = sprintf("SELECT * FROM user WHERE login = '%s' AND password = '%s'",
                @mysql_real_escape_string($user),
                @mysql_real_escape_string(sha1($password)));
        
        require("sgbdconnec.php");
        
// Rendre la base de données aston, la base courante
        $db_selected = @mysql_select_db('aston', $link);
        if (!$db_selected) {
            die('Impossible de sélectionner la base de données : ' . mysql_error());
        }



        $result = mysql_query($query);
        if (!$result) {
            $message = 'Requête invalide : ' . mysql_error() . "\n";
            $message .= 'Requête complète : ' . $query;
            die($message);
            header('Location: identError.php');
            
        }
        $row = mysql_fetch_array($result);
        if ($row == false) {
            
            header('Location: identError.php');
            die("table vide");
        }

        $rpassword = $row['password'];


        if ($rpassword == sha1($password)) {
            if ($user == "administrateur") {
                $_SESSION['login'] = $user;
                echo "parfait";            
               // header('Location: pageBackoffice.php');
                
            } else {
                $_SESSION['login'] = $user;
                echo "ok";
               // header('Location: index.php');
                
            }
        }
        mysql_close();
        ?>                               