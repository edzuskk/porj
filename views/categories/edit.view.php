<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?><br>

<h1>Rediget: "<?= htmlspecialchars($post["content"]) ?> "</h1>

<form method = "POST">
<input type = "hidden" name="id" value = <?= $post["id"]?>>
<p>Saturs: <input name="content" value = "<?=$post["content"] ?? "" ?>">
<button>Rediget</button>
</p>
</form>

<?php require "views/components/footer.php" ?>
