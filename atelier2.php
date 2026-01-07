<?php


$games = [
    ["name" => "Portal 2", "minimumAge" => 12],
    ["name" => "GTA V", "minimumAge" => 18],
    ["name" => "Rocket League", "minimumAge" => 7],
    ["name" => "Animal Crossing", "minimumAge" => 3],
];

// On simule l'age de l'utilisateur
$age = 7;


function isAllowedToPlay(int $gameMinAge, int $userAge):bool
{
    /*
    if ($userAge >= $gameMinAge) {
        return true;
    } else {
        return false;
    }
    */
    return $userAge >= $gameMinAge;

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
    <h1>Atelier 2</h1>
    <h2>Liste des jeux</h2>
    <ul>
        <?php foreach($games as $game): ?>
            <?php if (isAllowedToPlay($game["minimumAge"], $age)): ?>
                <li>Vous êtes autorisés à jouer à <?= $game["name"] ?></li>
            <?php else: ?>
                <li>Vous n'êtes pas autorisés à jouer à <?= $game["name"] ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>