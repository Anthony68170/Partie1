<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Exercice 10</title>
</head>
<body>
    <h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.

Affichage :  <br>
Montant à payer : 152 € <br>
Montant versé : 200 € <br>
Reste à payer : 48 € <br>
*************************************************** <br>
Rendue de monnaie : <br>
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €
</p>

<h2>
Résultat

Affichage :<br>

</h2>

<?php

/*

function renduMonnaie($montantAPayer, $montantVerse) {
    $reste = $montantVerse - $montantAPayer;
    $billets10 = intdiv($reste, 10);
    $reste %= 10;
    $billets5 = intdiv($reste, 5);
    $reste %= 5;
    $pieces2 = intdiv($reste, 2);
    $reste %= 2;
    $pieces1 = $reste;

    echo "<h2>Montant à payer : $montantAPayer €\n</h2>";
    echo "<h2>Montant versé : $montantVerse €\n</h2>";
    echo "<h2>Reste à payer : " . ($montantVerse - $montantAPayer) . " €\n</h2>";
    echo "<h2>Rendu de monnaie : \n</h2>";
    echo "<h2>$billets10 billets de 10 € - $billets5 billet de 5 € - $pieces2 pièce de 2 € - $pieces1 pièce de 1 €\n</h2></h2>";
}

renduMonnaie(152, 200);

*/

$montantAPayer = 152;
$montantVerse = 200;
$reste = $montantVerse - $montantAPayer;

$nb10 = 0;
$nb5 = 0;
$nb2 = 0;

while($reste > 10) {
    $nb10 ++ ; // +10 +10 +10 = total restant 
    $reste -= 10; // Le symbole -= signifie soustraire de .... donnant par la suite un total de ....
    
}

while($reste > 5) {
    $nb5 ++ ;
    $reste -= 5;
}

while($reste > 2){
    $nb2++;
    $reste -= 2;
} 

echo "<h2>Montant à payer : $montantAPayer €</h2>";
echo "<h2>Montant versé : $montantVerse €</h2>";
echo "$nb10 billets de 10 €. $nb5 billet de 5€. $nb2 pièce de 2€. $reste pièce de 1€"
?>
 