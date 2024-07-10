<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Exercice 13</title>
</head>
<body>

<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau 
    (pas de coefficient).<br>
Elle devra être affichée avec 2 décimales.</p>

<h2> Résultat</h2>

<?php

// PLACER LES NOTES DANS UN TABLEAU
$tabNotes = [10,12,8,19,3,16,11,13,9]; 


// AFFICHAGE DES NOTES DU TABLEAU 
echo "Les notes obtenues par les élèves sont : ";
foreach ($tabNotes as $note) {
    echo $note . " ";
}

echo "<br>";

// COMPTER LE NB DE NOTES DANS LE TABLEAU
$nbNotes = count($tabNotes); 

$total = 0;

foreach ($tabNotes as $valeur) {
    $total += $valeur;
}

// CALCUL DE LA MOYENNE
$moyenne = round($total / $nbNotes, 2);


// AFFICHER LA DERNIERE REPONSE / RESULTAT 
echo "Sa moyenne générale est donc de : $moyenne";



?>

</body>
</html>




