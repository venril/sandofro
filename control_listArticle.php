<?php

session_start();
extract($_POST);
$valTest = 0;

$query = "SELECT auteur,article,dateparution FROM article";
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
echo $message;
}
$row = mysql_fetch_array($result);
if ($row == false) {
echo("table vide");
}
while ($row) {
echo $row['auteur'];
echo $row['dateparution'];
echo $row['article'];
}
mysql_close();
?>                               