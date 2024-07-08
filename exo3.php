<h1>Exerice 3<h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.<br>

<h2>Résultat</h2>


<?php
                                //EXERCICE 3 PHP

// Déclarer la constante (la phrase) puisque à nouveau demander
 $phrase = "Notre formation DL commence aujourd'hui";

// Appeler la fonction permettant de répondre à la question
// Ici la fonction str_replace permet de remplacer le mot "aujourd'hui" par "demain" dans la phrase de l'énnoncé
 $PhraseModif = str_replace("aujourd'hui", "demain", $phrase);

 
 // Ensuite on fait apparaître la phrase d'origine
 echo "La phrase Notre formation DL commence aujourd’hui.<br>";
 
 // Puis la phrase modifiée
 echo "$PhraseModif <br>";

?>