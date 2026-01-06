<?php

$utilisateurs = [
    ["nom" => "Doe", "prenom" => "John"],
    ["nom" => "Spencer", "prenom" => "Martin"],
    ["nom" => "Doe", "prenom" => "Jane"],
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
    <h1>Boucles foreach</h1>
    <h2>Syntaxe avec le paragraphe dans le php</h2>
    <?php
    foreach ($utilisateurs as $utilisateur) {
        //echo "<p>"  . $utilisateur["prenom"] . "</p>";
        echo "<p> {$utilisateur["prenom"]} </p>";
    }
    ?>
    <h2>Syntaxe avec le html séparé</h2>
    <?php foreach ($utilisateurs as $utilisateur) { ?>
        <p class="user"> <?= $utilisateur["prenom"] ?> </p>
    <?php } ?>

    <h2>Syntaxe avec endforeach</h2>
    <?php foreach($utilisateurs as $utilisateur): ?>
        <p class="user"> <?= $utilisateur["prenom"] ?> </p>
    <?php endforeach; ?>
    
</body>
</html>