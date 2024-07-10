<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Exercice 13</title>
</head>
<body>

<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient).<br>
Elle devra être affichée avec 2 décimales.</p>

<h2> Résultat</h2>

<?php

$tabNotes = [10,12,8,19,3,16,11,13,9]; // PLACER LES NOTES DANS UN TABLEAU
$nbNotes = count($tabNotes); // COMPTER LE NB DE NOTES DANS LE TABLEAU

$total = 0;
$moyenne = 0;

foreach ($tabNotes as $valeur) {
    $total = $total + $valeur;
}
// echo $somme ;

echo "Les notes obtenues par les élèves sont : <br>";
round($total/count($tabNotes), 2);

echo "Sa moyenne générale est donc de : $moyenne";

// list ($tabNotes);
// var_dump($tabNotes)
// print_r($tabNotes)
// $sommeNotes = array_sum($tabNotes);
// $moyenneNotes = $sommeNotes / $nbNotes;
// $arrondiMoyenne = round($moyenneNotes, 2);


?>

</body>
</html>

