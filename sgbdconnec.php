<?php
// Formulation de la requête
// Requête
        $userAdminDB = 'root';
        $hote = 'localhost';
        $passwordAdminDB = 'admin';
        
// test connexion
        $link = @mysql_connect($hote, $userAdminDB, $passwordAdminDB);
        if (!$link) {
            die('Impossible de se connecter : ' . mysql_error());
        }

?>


