<h1>Exerice 2<h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci<br>

<h2>Résultat</h2>


<?php
                                //EXERCICE 2 PHP

// Déclarer la constante (la phrase)
 $phrase = "Notre formation DL commence aujourd'hui";


// Ici str_word_count permet de compter le nombre de mots inclus dansd la constantes
 $nb_mots = str_word_count($phrase);

 
 // En 3ème, on fait apparaître une phrase intégrant la réponse
 echo "La phrase Notre formation DL commence aujourd’hui contient $nb_mots mots.<br>";

?>


