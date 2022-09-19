<?php
/*
    // on importe le contenu du fichier "db.php"
    include "db.php";

    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM artist");

    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    
    // on clôt la requête en BDD
    $requete->closeCursor();
*/

include "db.php";

$db = connexionBase();
$requete = $db -> query ("SELECT * FROM artist");

$tableau = $requete -> fetchAll (PDO::FETCH_OBJ);
$requete -> closeCursor ();

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>

<body>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <!-- Ici, on ajoute une colonne pour insérer un lien -->
        <th></th>
    </tr>

    <?php
        foreach ($tableau as $artist):
    ?>

    <tr>
        <td><?= $artist -> artist_id?></td>
        <td><?= $artist -> artist_name?></td>
        <td><a href="artist_detail.php?id=<?= $artist -> artist_id ?>">Détail</a></td>
    </tr>

    <?php
    endforeach;
    ?>

</table>

</body>

</html>