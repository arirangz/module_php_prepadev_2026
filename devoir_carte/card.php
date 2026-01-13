<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST["nom_expediteur"]) && isset($_POST["nom_destinataire"]) && isset($_POST["message"])): ?>
        <?php if($_POST["nom_expediteur"] !== "" && $_POST["nom_destinataire"] !== "" && $_POST["message"] != ""): ?>
            <h1>Bonne année <?=htmlspecialchars($_POST["nom_destinataire"])  ?></h1>
            <h2><?= htmlspecialchars($_POST["message"]) ?> de la part de <?=htmlspecialchars($_POST["nom_expediteur"])  ?></h2>
        <?php else: ?>
            <p>Tous les champs sont obligatoires, retournez sur la page de <a href="index.php">création de carte</a></p>
        <?php endif ?>
    <?php else:?>
        <p>Vous ne pouvez pas accéder à cette page directement, retournez sur le formulaire de <a href="index.php">création de carte</a></p>
    <?php endif; ?>
</body>
</html>