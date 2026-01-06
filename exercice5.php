<?php 

$mangas = [
    ["title" => "Attack On Titan", "release_year" => 2018],
    ["title" => "One Piece", "release_year" => 1997],
    ["title" => "Dragon Ball", "release_year" => 1984],
    ["title" => "Bleach", "release_year" => 2004],
    ["title" => "Inuyasha", "release_year" => 1999],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($mangas as $manga): ?>
        <li>Titre: <?= $manga["title"] ?> - Année: <?= $manga["release_year"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>