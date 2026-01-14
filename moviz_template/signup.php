<?php
require_once "templates/header.php";
require_once "libs/pdo.php";
require_once "libs/user.php";

$error = false;
if (isset($_POST["email"]) && isset($_POST["nickname"]) && isset($_POST["password"])) {
    $result = addUser($pdo, $_POST["nickname"], $_POST["email"], $_POST["password"]);

    if ($result) {
        header("Location: login.php");
    } else {
        $error = true;
    }
}

?>


<div class="container">
    <?php if ($error): ?>
        <div class="alert alert-danger" role="alert">
            Une erreur est survenue durant l'inscription
        </div>
    <?php endif; ?>
    <form method="post">
        <h1>Inscription</h1>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="nickname" class="form-label">Pseudo</label>
            <input name="nickname" type="text" class="form-control" id="nickname">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>

        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>


<?php
require_once "templates/footer.php";
?>