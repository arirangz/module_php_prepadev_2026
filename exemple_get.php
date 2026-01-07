<?php 
//?prenom=Jane&nom=Doe&age=30

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exemple get</h1>

    <?php

        // On verifie qu'on a bien le prénom dans le tableau $_GET
        if (isset($_GET["prenom"])) {
            echo htmlspecialchars($_GET["prenom"]);
        } else {
            echo "Paramètre prenom manquant dans l'url";
        }
    ?>
</body>

</html>