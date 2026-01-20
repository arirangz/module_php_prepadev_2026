<?php
require_once "Rectangle.php";
$rectangle1 = new Rectangle();
$rectangle1->setCouleur("rouge");
$rectangle1->setLargeur(10);
$rectangle1->setLongueur(5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exerice POO Rectangle</h1>
    <h2>Rectangle</h2>
    <p>Couleur : <?= $rectangle1->getCouleur() ?></p>
    <p>Longueur : <?= $rectangle1->getLongueur() ?>m</p>
    <p>Largeur : <?= $rectangle1->getLargeur() ?>m</p>
    <p>Surface : <?= $rectangle1->calculerSurface() ?>m²</p>
</body>
</html>