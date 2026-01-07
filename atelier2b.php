<?php
declare(strict_types=1);

$games = [
    ["name" => "Portal 2", "minimumAge" => 12],
    ["name" => "GTA V", "minimumAge" => 18],
    ["name" => "Rocket League", "minimumAge" => 7],
    ["name" => "Animal Crossing", "minimumAge" => 3],
];



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

    <form action="" method="post">
        <p>
            <label for="age">Entrez votre age</label>
            <input type="number" name="age" id="age">
        </p>
        <input type="submit" value="Afficher les jeux">
    </form>

    <?php if (isset($_POST["age"])): ?>
        <h2>Liste des jeux</h2>
        <ul>
            <?php foreach($games as $game): ?>
                <?php if (isAllowedToPlay($game["minimumAge"], (int)$_POST["age"])): ?>
                    <li>Vous êtes autorisés à jouer à <?= $game["name"] ?></li>
                <?php else: ?>
                    <li>Vous n'êtes pas autorisés à jouer à <?= $game["name"] ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Saisir votre age pour savoir à quels jeux vous pouvez jouer</p>
    <?php endif; ?>
</body>
</html>