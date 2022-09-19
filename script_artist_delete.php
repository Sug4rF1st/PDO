<?php

if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) GOTO TrtRedirection;

require "db.php";

$db = ConnexionBase();

try {

    $requete = $db -> prepare("DELETE FROM artist WHERE artist_id = ?");
    $requete -> execute(array($_GET["id"]));
    $requete -> execute();
    $requete -> closeCursor();

}

catch (Exception $e) {
    echo "Erreur : " . $requete -> errorInfo()[2] . "<br>";
    die("fin du script (script_artist_modif.php)");

}

TrtRedirection:
header("Location: artist.php");
exit;