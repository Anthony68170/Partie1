<h1>Exerice 4<h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.<br>
Affichage : La phrase « Engage le jeu que je le gagne » est palindrome<br></p>

<h2>Résultat</h2>



<?php
                                //EXERCICE 4 PHP

// Déclarer la VARIABLE; ici la phrase suspectée d'être un palindrome 
// Déclarer une autre variable stockant la phrase inversée (dans un coockie? ou tableau?)

$phrase = "Engage le jeu que je le gagne";
$phrase = str_replace(" ", "", $phrase);

$stockreverse = (strrev($phrase));
// $palindrome ==  phrase (sans espace , sans rien) = phrase Reverse

// si $phrase a la même valeur que $stockreverse alors c'est un palindrome sinon ça n'est pas un palindrome

if(strtolower($phrase) == strtolower($stockreverse)){

    echo "ceci est un palindrome";
}else{
    echo "ceci n'est pas un palindrome";

}

//  declare une autre variable ou vous allez stocker le reverse de la variable1 grace à une fonction prédéfinie


?>

