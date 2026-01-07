<?php

require_once "libs/city.php";

$cities = getCities();

require_once "templates/header.php";

?>


        <form action="" method="get">

            <p>
                <label for="city">Ville</label>
                <select name="city" id="city">
                    <?php foreach ($cities as $index => $city): ?>
                        <?php
                        $selected = "";
                        if (isset($_GET["city"]) && (int)$_GET["city"] === $index) {
                            $selected = "selected";
                        }
                        ?>
                        <option <?= $selected ?> value="<?= $index ?>"><?= $city["name"] ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <input type="submit" value="Voir la météo">
        </form>
        <?php if (isset($_GET["city"])): ?>
            <?php $selectedCityIndex = (int)$_GET["city"]; ?>
            <h2><?= $cities[$selectedCityIndex]["name"] ?></h2>
            <h3><?= $cities[$selectedCityIndex]["weather"] ?></h3>
            <p>Température mini: <?= $cities[$selectedCityIndex]["min_temp"] ?> - Température max: <?= $cities[$selectedCityIndex]["max_temp"] ?></p>
            <a href="city_detail.php?city_index=<?= $selectedCityIndex ?>">Afficher les autres informations</a>
        <?php endif; ?>

<?php require_once "templates/footer.php"; ?>