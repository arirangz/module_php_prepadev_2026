<?php
$prenom = "John";
$age = 20;

$fruits = ["Pomme", "Poire", "Fraise"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?php echo "Hello $prenom" ?></h2>
    <h2><?= "Hello $prenom" ?></h2>

    <p>
        <?php    
        if ($age >= 18) {
            echo "Vous êtes autorisés à jouer à ce jeu";
        } else {
            echo "Vous n'êtes pas autorisés à jouer à jeu";
        }
        ?>
    </p>

    <p>Fruit: <?= $fruits[0] ?></p>

</body>

</html>