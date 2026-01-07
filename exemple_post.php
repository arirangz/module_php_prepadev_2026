<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </p>
        <input type="submit" value="Envoyer">
    </form>
    <?php
        if (isset($_POST["nom"])) {
            echo htmlspecialchars($_POST["nom"]);
        } else {
            echo "Envoyer le formulaire";
        }
    ?>
</body>
</html>