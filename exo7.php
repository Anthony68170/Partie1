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
// Définir les catégories

$agenfant = 10;
$categorie = "Minime";

$catpoussin = ($age >= 6 && $age <= 7);
$catpupille = ($age >= 8 && $age <= 9);
$catminime = ($age >= 10 && $age <= 11);
$catcadet = ($age >= 8 && $age <= 9);

/*if ($age >= 6 && $age <= 7) {
   
} elseif ($age >= 8 && $age <= 9) {
   
} else ($age >= 10 && $age <= 11) {
    echo "L'enfant qui a 10 ans est dans la catégorie Minime";
} else ($age >= 12) {

} while ($age >= 8 && $age <= 9) {

}
*/
echo "L'enfant qui a $age ans appartient à la catégorie $resultat .";

?>