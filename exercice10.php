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
            <label for="first_name">Prénom</label>
            <input type="text" name="first_name" id="first_name">
        </p>
        <p>
            <label for="last_name">Nom</label>
            <input type="text" name="last_name" id="last_name">
        </p>
        <input type="submit" value="Envoyer">
    </form>
    <?php 
        if (isset($_POST["first_name"]) && isset($_POST["last_name"])) {
            $prenom = htmlspecialchars($_POST["first_name"]);
            $nom =  htmlspecialchars($_POST["last_name"]);
            echo "Bonjour $prenom $nom";
        }
    ?>
</body>
</html>