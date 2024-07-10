<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
<br>
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser <br>
<br>
Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime » <br>

</p>

<h2>Résultat</h2>

<?php



//ECLATER/SECTIONNER le Problème / l'exercice - 



// Afficher les erreurs PHP pour déboguer (si jamais)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// DECLARER la cible
$ageEnfant = 10; // Ici est la cible - selon l'exemple de cours c'est "Georges"

// DECLARER les catégories
// Ici nous avons les différentes "CONSTANTES" dans lesquelles l'âge "cible" doit être placé dans l'un d'eux selon l'âge
$catPoussin = "Poussin";
$catPupille = "Pupille";
$catMinime = "Minime";
$catCadet = "Cadet";


// APPELER/DECLARER le résultat
$resultat = 51;

//$horsCat = (($ageEnfant) <=5);

// $filteredVal = filter_var($resultat, FILTER_SANITIZE_SPECIAL_CHARS);
// var_dump("la valeur filtered : ".$filteredVal);

// DEFINIR l'algorithme en intégrant les variables déclarer au-dessus par des conditions (if, else, while, ...)
if(gettype($ageEnfant) == "integer" || "($ageEnfant < 6 && $ageEnfant > 18)"){
    
    if($ageEnfant >= 6 && $ageEnfant <= 7) {
        $resultat = $catPoussin;

    }  elseif ($ageEnfant >= 8 && $ageEnfant <= 9) {
        $resultat = $catPupille;
        
    }  elseif ($ageEnfant >= 10 && $ageEnfant <= 11) {
        $resultat = $catMinime;
        
    }  elseif ($ageEnfant >= 12) {
        $resultat = $catCadet;
    }
}    
//AFFICHER LE RESULTAT MISE SOUS GUILLEMETS AVEC ALT-174 et ALT-175 autour de "Minime"
$resultat = "« " . $resultat . " »";

//AFFICHER LE RESULTAT
echo"L’enfant qui a $ageEnfant ans appartient à la catégorie $resultat. <br>";



?>

<?php

/*    }  else ($ageEnfant <= 5 && $ageEnfant >= 19) {
        echo "La catégorie liée à $ageEnfant ans n'est pas gérée.<br>"; 
    }*/
 


/* ANCIEN RAISONNEMENT

Vu qu'il s'agit de confirmer/autoriser l'élément de l'exercice/prb à être placé qq part
selon des critères de sélection/conditions - Alors 'il s'agit d'un algorithme conditionnel
DONC il faut DECLARER L'ELEMENT PRINCIPAL (l'âge demandé "la cible")
ET VU QU'il s'agit d'un Algorithme Conditionnel - DONC il faut aussi DECLARER 
LES CONDITIONS (le barême des a^ges pour chaque catégorie)


// DECLARER UN DEFAUT POSSIBLE
}  else { ($ageEnfant < 6 && $ageEnfant > 18) ;
echo "La catégorie liée à $ageEnfant ans n'est pas gérée.<br>";
}

//DECLARER la cible
$ageEnfant = 8;

// DECLARER les catégories
$catpoussin = "Poussin";
$catPupille = "Pupille";
$catMinime = "Minime";
$catCadet = "Cadet";

// APPELER/DECLARER le résultat
$resultat = "";

// DECLARER le défaut/l'exception
switch(true){
    case $ageEnfant <=5 : echo "Cet âge n'est pas gérée par une catégorie"; break;
    case $ageEnfant >=19 : echo "Aucune catégorie ne gère cet âge"; break;
    default : echo "Merci de rentrer un chiffre adapté au catégorie";
}



// RAISONNEMENTS PRECEDENTS

$catpoussin = ($age >= 6 && $age <= 7);
$catpupille = ($age >= 8 && $age <= 9);
$catminime = ($age >= 10 && $age <= 11);
$catcadet = ($age >= 12);

if ($age >= 6 && $age <= 7) {
   
} elseif ($age >= 8 && $age <= 9) {
   
} else ($age >= 10 && $age <= 11) {
    echo "L'enfant qui a 10 ans est dans la catégorie Minime";
} else ($age >= 12) {
    echo "L'enfant qui a 10 ans est dans la catégorie Minime";
} while ($age >= 8 && $agenfant <= 9) {
}
echo "L'enfant qui a $age ans appartient à la catégorie $resultat ."; 


?>*/