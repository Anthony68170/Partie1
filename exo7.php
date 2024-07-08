<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser <br>

Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime » <br>

</p>

<h2>Résultat</h2>

<?php
// Définir les catégories

$age = 10;
$resultat = 
if ($age >= 6 && $age <= 7) {
    echo "L'enfant est dans la catégorie /*Poussin*/";
} elseif ($age >= 8 && $age <= 9) {
    echo "L'enfant est dans la catégorie /*Pupille*/";
} else ($age >= 10 && $age <= 11) {
    echo "L'enfant est dans la catégorie /*Minime*/";
} else ($age >= 12) {
    echo "L'enfant est dans la catégorie /*cadet*/";
} while ($age >= 8 && $age <= 9) {
    echo "L'enfant est dans la catégorie /*Hors catégorie*/";
}

echo "L'enfant qui a $age ans appartient à la catégorie $resultat .";

?>