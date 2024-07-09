<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>
    <h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>
Résultat

Affichage :<br>
Age : 32<br>
Sexe : F<br>
La personne est imposable.<br>

</h2>

<?php

// Permettre à l'utilisateur de rentrer/remplacer l'âge
$age = 32; 

// Permettre à l'utilisateur de rentrer/remplacer le genre par 'homme' ou 'femme'
$sexe = 'homme';

//
echo "Affichage :<br>";
echo "Âge : $age <br>";
echo "Sexe : $sexe <br>";

// Vérifier si la personne est imposable 
$imposable = false;
if (($sexe == 'femme' && $age >= 18 && $age<= 35) || ($sexe == 'homme' && $age > 20)){
    $imposable = true ;
} 

if ($imposable){
    echo "La personne est imposable. <br>";
    echo "La personne n'est pas imposable.<br>";
}
?>
</body>
</html>



<!-- ANCIENS RAISONNEMENTS

// Permettre le remplacement de l'âge par l'utilisateur
$age = 32

// Permettre le remplacement du Genre (sexe) par l'utilisateur
$sexe = str(femme)
$femmeIMP = ($age>=18 && $age <35);
$hommeIMP = ($age>=20);
$peronneNONimp = ($age<=17 && $age>=36) 



