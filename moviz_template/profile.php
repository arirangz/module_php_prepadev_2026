<?php require_once "templates/header.php" ?>
<div class="container">

    <h1>Profil</h1>
    <h2>Email: <?= htmlspecialchars($_SESSION["email"]) ?></h2>
</div>
<?php require_once "templates/footer.php" ?>
