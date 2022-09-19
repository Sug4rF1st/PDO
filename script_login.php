<?php
require "db.php";
$db = ConnexionBase();
$sql = "SELECT * FROM users WHERE login='".$_POST["login"]."' AND mdp='".$_POST["password"]."'";
$result = $db -> query($sql);

$user = $result->fetch(PDO::FETCH_OBJ);

var_dump($user);

if ($user) {
    $_SESSION["connected"] = true;
}
else {
    $_SESSION["connected"] = false;
}
?>