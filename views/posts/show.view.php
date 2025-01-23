<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?> </h1>

<a href="edit?id=<?= $post["id"] ?>">Rediget</a><br>
<form aciton="/delete">
<button>Dzest</button>

<?php require "views/components/footer.php" ?>
