<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?><br>

<h1>Rediget: "<?= htmlspecialchars($categories["category_name"]) ?> "</h1>

<form method = "POST">
<input type = "hidden" name="id" value = <?= $categories["id"]?>>
<p>Saturs: <input name="category_name" value = "<?=$categories["category_name"] ?? "" ?>">
<button>Rediget</button>
</p>
</form>

<?php require "views/components/footer.php" ?>
