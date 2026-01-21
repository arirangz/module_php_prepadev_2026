<?php require_once _ROOTPATH_ . '/templates/header.php'; ?>

<h1>Liste des articles</h1>

<?php foreach($articles as $article): ?>
<h2><?= htmlspecialchars($article->getTitle()); ?></h2>

<?php endforeach; ?>
<?php require_once _ROOTPATH_ . '/templates/footer.php'; ?>