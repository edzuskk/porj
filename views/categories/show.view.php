<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>

<h1><?= htmlspecialchars($categories["category_name"])?> </h1>

<a href="edit?id=<?= $categories["id"] ?>">Rediget</a><br>

<form action="/categories/delete" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($categories['id']) ?>">
    <button type="submit">Dzēst</button>
</form>


<?php require "views/components/footer.php" ?>
