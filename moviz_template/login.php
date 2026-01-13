<?php 
require_once "libs/user.php";
require_once "templates/header.php"; 
?>

<main class="form-signin w-100 m-auto" style="max-width: 330px;">
    <form method="post"> 
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating"> <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
        <div class="form-floating"> <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label> </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
    <?php if (isset($_POST["email"]) && isset($_POST["password"])): ?>
        <?php if (loginUser($_POST["email"], $_POST["password"])):?>
            <div class="alert alert-success mt-3" role="alert">
                Accès autorisé 
            </div>
        <?php else: ?>
            <div class="alert alert-danger mt-3" role="alert">
                Accès refusé
            </div>
        <?php endif; ?>
    <?php endif; ?>
</main>

<?php require_once "templates/footer.php" ?>