<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice couleur</h1>
    <form action="" method="post">
        <p>
            <label for="color">Couleur</label>
            <input type="text" name="color" id="color">
        </p>
        <input type="submit" value="Envoyer">
    </form>
    <?php 
        if (isset($_POST["color"])) {
            if (strtolower($_POST["color"]) === "rouge") {
                echo "rouge est aussi ma couleur préférée !";
            } else {
                echo "Votre couleur préférée est ".htmlspecialchars($_POST["color"]);
            }
        }
    ?>
</body>
</html>