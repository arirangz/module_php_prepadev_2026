<?php
require_once "Rectangle.php";
require_once "Cercle.php";
$rectangle1 = new Rectangle();
$rectangle1->setCouleur("rouge");
$rectangle1->setLargeur(10);
$rectangle1->setLongueur(5);

$cercle1 = new Cercle();
$cercle1->setCouleur("bleu");
$cercle1->setRayon(10);
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

    <h2>Cercle</h2>
    <p>Couleur: <?= $cercle1->getCouleur(); ?></p>
    <p>Rayon: <?= $cercle1->getRayon(); ?>m</p>
    <p>Surface: <?= $cercle1->calculerSurface(); ?>m²</p>
</body>
</html>