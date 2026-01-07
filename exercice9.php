<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_GET["nom"])) {
            $nom = htmlspecialchars($_GET["nom"]);
            echo "Joyeux anniversaire $nom";
        } else {
            echo "le paramètre nom n'est pas présent dans l'url";
        }
    ?>
</body>
</html>