<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require 'Stagiaire.php';
    require 'Formation.php';

    $stagiaire1 = new Stagiaire("John", [15, 18, 13]);
    $stagiaire2 = new Stagiaire("James", [12, 16, 14]);
    $stagiaire3 = new Stagiaire("Jane", [17, 20, 19]);

    $formation = new Formation("Formation PHP", 3, [$stagiaire1, $stagiaire2, $stagiaire3]);

    echo "<br>";
    echo "la moyenne du stagaire 1 est : ". $stagiaire1->claculerMoyenne();
    echo "<br>";
    echo "la moyenne du stagaire 2 est : ". $stagiaire2->claculerMoyenne();
    echo "<br>";
    echo "la moyenne du stagaire 2 est : ". $stagiaire3->claculerMoyenne();
    echo "<br>";
    echo "Moyenne de la formation : ".$formation->calculerMoyenneFormation();
    echo "<br>";

    echo "<hr>";

    echo "la note maximale du stagaire 1 est : ". $stagiaire1->trouverMax();
    echo "<br>";
    echo "la note maximale du stagaire 2 est : ". $stagiaire2->trouverMax();
    echo "<br>";
    echo "la note maximale du stagaire 3 est : ". $stagiaire3->trouverMax();
    echo "<br>";

    echo "<hr>";

    echo "la note minimale du stagaire 1 est : ". $stagiaire1->trouverMin();
    echo "<br>";
    echo "la note minimale du stagaire 2 est : ". $stagiaire2->trouverMin();
    echo "<br>";
    echo "la note minimale du stagaire 3 est : ". $stagiaire3->trouverMin();
    echo "<br>";

    echo "<hr>";

    echo "Indice du stagiaire avec la meilleure moyenne : ".$formation->getIndexMax();
    echo "<br>";
    echo "Nom du premier stagiaire avec la meilleure moyenne : ".$formation->afficherNomMax();
    echo "<br>";
    echo "Note minimale du premier stagiaire avec la meilleure moyenne : ".$formation->afficherMinMax();
    echo "<br>";
    $formation->trouverMoyenneParNom("James");

    ?>
</body>
</html>


