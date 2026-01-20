<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Création de carte de voeux</h1>
    <form action="card.php" method="post">
        <p>
            <label for="nom_expediteur">Nom de l'expéditeur</label>
            <input type="text" name="nom_expediteur" id="nom_expediteur">
        </p>
        <p>
            <label for="nom_destinataire">Nom du destinataire</label>
            <input type="text" name="nom_destinataire" id="nom_destinataire">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
        </p>
        <input type="submit" value="Générer la carte">
    </form>

</body>

</html>