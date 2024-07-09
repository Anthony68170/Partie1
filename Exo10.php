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

function renduMonnaie($montantAPayer, $montantVerse) {
    $reste = $montantVerse - $montantAPayer;
    $billets10 = intdiv($reste, 10);
    $reste %= 10;
    $billets5 = intdiv($reste, 5);
    $reste %= 5;
    $pieces2 = intdiv($reste, 2);
    $reste %= 2;
    $pieces1 = $reste;

    echo "Montant à payer : $montantAPayer €\n";
    echo "Montant versé : $montantVerse €\n";
    echo "Reste à payer : " . ($montantVerse - $montantAPayer) . " €\n";
    echo "Rendu de monnaie : \n";
    echo "$billets10 billets de 10 € - $billets5 billet de 5 € - $pieces2 pièce de 2 € - $pieces1 pièce de 1 €\n";
}

renduMonnaie(152, 200);

?>
 