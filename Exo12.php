<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Exercice 12</title>
</head>
<body>

<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
<br>Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG</p>

<h2> Résultat</h2>

<?php

$gens = array (
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
);

function $messageAcc($prenom, language) {
    switch ($language) {
        case => "FRA":
            return "Salut" $prenom;
        case => "FRA":
            return "Salut" $prenom;
        case => "FRA":
            return "Salut" $prenom;
                            
    }
}

foreach ($gens as $prenom => $language) {
    echo "$messageAcc ($prenom, $language) . <br>";
}

?>

</body>
</html>