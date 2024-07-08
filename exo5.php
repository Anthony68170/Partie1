<h1>Exercice 5</h1>

<p>Ecrire un alorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
    Attention, la valeur devra être arrondie à 2 décimales.<br>
<br>
    Affichage : <br>
    Montant en francs : 100 fr <br>
    100 francs = 15.24 € <br>
</p>

<h2>Résultat</h2>

<?php

$valeurFrancs = 100;
$valeurConversion = 6.55957;
$valeurEuros = $valeurFrancs/$valeurConversion;
$arrondi = round($valeurEuros, 2);

//round(int|float $valeurEuros, int $ precision = 2, int );

echo "Montant en francs : $valeurFrancs fr<br>";
echo "$valeurFrancs francs = $arrondi €<br>";

?>