<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Exercice 11</title>
</head>
<body>

<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. <br>
    Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne).<br>
    Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes » </p>

<h2>Résultat

</h2>

<?php

// DECLARER le nom du tableau (Voir cours 3H - 3 solutions possibles)
$marques = ["Peugeot","Renault","BMW","Mercedes"];

// DECLARER le nombre de marques de voitures ET COMPTER 
$nbmarques = count($marques);

// EXECUTER une boucle avec "for" (1ere solution)
echo"<h2>Solution avec for</h2>";
for ($i = 0; $i < count($marques); ){
    echo $marques[$i]. "<br>";
    $i++;
}

// EXECUTER une boucle avec "while" (2eme solution)
echo"<h2>Solution avec while</h2>";
$i = 0;
while($i < $nbmarques) {
    echo $marques[$i]. "<br>";
    $i++;
}
    
// EXECUTER une boucle avec "foreach" (3eme solution)
echo"<h2>Solution avec foreach</h2>";
foreach ($marques as $marques) {
    echo $marques. "<br>";
}

echo "<h2>Le nombre de voitures présentent dans le tableau est de $nbmarques<h2>"
?>


</body>
</html>