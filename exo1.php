<h1>Exerice 1<h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans une phrase.<br>
(espaces inclus)<br></p>

<h2>Résultat</h2>


<?php
                                //EXERCICE 1 PHP

/* En 1er, il faut "DECLARER" la ou les VARIABLES ET CONSTANTES nécessaires donc les FONCTIONS ou ARGUMENTS, le TYPE;
DONC LA FONCTION ATTEND UN PARAMETRE. La fonction strlen attend un ou plusieurs caractères
Pour faire exister l'élément à étudier; ici il faut donc déclarer la Phrase du 1er Exo
pour l'analyser et pouvoir y lier une FONCTION pour obtenir la réponse sur la VALEUR demandée  */
 $phrase = "Notre formation DL commence aujourd'hui";

// En 2ème, il faut Déclarer la variable liée à la réponse, donc => "Nb_Caracteres"
// Puis ajouter la particule/formule permettant de donner l'ordre de calculer le nb de caracteres avec "strlen"
// Puis appeler entre parenthèse () l'élément qui doit être calculer/analyser, donc => $ pour appeler et (phrase)
 $nb_Caracteres = strlen($phrase);


//  je déclare une variable en type chaine de caractères
//  je crée une autre qui stokera le resultat de ma variable 1 passé en argument de la fonction strlen
//  la fonction strlen permet de calculer la longueur d'un string

 
 // En 3ème, on fait apparaître une phrase intégrant la réponse
 echo "La phrase contient $nb_Caracteres caractères<br>";

?>