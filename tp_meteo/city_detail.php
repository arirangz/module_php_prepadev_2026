<?php

require_once "libs/city.php";
require_once "templates/header.php";

?>
<a href="index.php">Retour</a>

<?php

if (isset($_GET["city_index"])) {

    $city = getCityByIndex((int)$_GET["city_index"]);

    ?>

    <h1>Météo de la ville <?= $city["name"] ?></h1>
    <h2>Temps actuel<?= $city["weather"] ?></h2>
    <p>Température min: <?= $city["min_temp"] ?> </p>
    <p>Température max: <?= $city["max_temp"] ?> </p>
    <p>Vent: <?= $city["wind"] ?> </p>
    <p>Humidité: <?= $city["humidity"] ?> </p>

<?php
} else {
    echo "paramètre manquant dans l'url";
}

?>

<?php require_once "templates/footer.php"; ?>