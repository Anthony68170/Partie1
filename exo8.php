<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>

    <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :<br></p>

    <p>Affichage (pour la table de 8) : ;<br>
    Table de 8 : <br>;
    1 x 8 = 8 <br>;
    2 x 8 = 16 <br>;
    3 x 8 = 24 … <br>;</p>

    <h2>Table de 8 : </h2>

    <?php

// table de multiplication pour le nombre 8
$nombre = 8;

// Algorithme qui additionne le chiffre 8 au précédent jusqu'à la 10ème valeur
for ($i = 1; $i <=10; $i ++){
    $resultat = $i * $nombre;
    echo "<h2>$i x $nombre = $resultat</h2>";
}

/*

$range = range(1,10);
var_dump($range);

foreach(range(1,8) as $valeur){
    echo $valeur . " ";
    }

    echo "Table de 8 :<br>";
    echo "1 x 8 = 8 <br>";
    echo "2 x 8 = 16 <br>";
    echo "3 x 8 = 24 <br>";
    echo "4 x 8 = 32 <br>";
    echo "5 x 8 = 40 <br>";
    echo "6 x 8 = 48 <br>";
    echo "7 x 8 = 56 <br>";
    echo "8 x 8 = 64 <br>";
    echo "9 x 8 = 72 <br>";
    echo "10 x 8 = 80";
    
*/
?>
</body>
</html>