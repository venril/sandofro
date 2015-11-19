<?php

session_start();
// detruit l'id
$_SESSION = array();
// detruit la structure (le tableau)
session_unset();
session_destroy();
header('Location: index.php');
exit;
?>