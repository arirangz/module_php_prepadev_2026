<?php

function calculateArea(float $length, float $width):float
{
    return $length * $width;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice fonction</h1>
    <ul>
        <li>Chambre: <?= calculateArea(3,3) ?>m²</li>
        <li>Salon: <?= calculateArea(4,5) ?>m²</li>
    </ul>
</body>
</html>