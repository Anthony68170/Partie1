<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2).<br>
<br>
    
Affichage : <br>
Prix unitaire de l’article : 9.99 € <br>
Quantité : 5 <br>
Taux de TVA : 0.2 <br>
Le montant de la facture à régler est de : 59.94 € <br>
</p>

<h2>Résultat</h2>


<?php

$prixht = 9.99;
$quantite = 5;
$tauxtva = 0.2;
$tva = $prixht*$tauxtva;
$prixttc = $prixht + $tva ;
$prixtotal = $prixttc * $quantite;

echo "Prix unitaire de l’article : 9.99 € <br>";
echo "Quantité : 5 <br>";
echo "Taux de TVA : 0.2 <br>";
echo "Le montant de la facture est de : $prixtotal €<br>";

?>