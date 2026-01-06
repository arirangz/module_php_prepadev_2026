<?php 
$countries = [
    ["name" => "France", "population" => 69],
    ["name" => "Espagne", "population" => 67],
    ["name" => "USA", "population" => 270],
    ["name" => "Italy", "population" => 63],

];
// On prépare un tableau pour stocker le pays le plus peuplé
$biggestCountry = ["name" => "", "population" => 0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atelier 1</h1>
    <h2>Liste des pays</h2>
    <ul>
        <?php foreach($countries as $country): ?>
            <!-- Ajouter un if pour STOCKER le pays le plus grand -->
            <?php 
                if ($country["population"] > $biggestCountry["population"]) {
                    $biggestCountry["population"] = $country["population"];
                    $biggestCountry["name"] = $country["name"];
                }
            ?>

        <li><?= $country["name"] ?> - Population: <?= $country["population"] ?> millions</li>
        <?php endforeach; ?>
    </ul>
    <h2>Le pays le plus peuplé est <?= $biggestCountry["name"] ?> avec une population de <?= $biggestCountry["population"] ?></h2>
</body>
</html>