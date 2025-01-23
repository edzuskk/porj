<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?><br>

<form method = "POST">
<input type = "hidden" name="id" value = <?= $post["id"]?>>
<input name="content" value = "<?=$post["content"] ?? "" ?>">
<button>Rediget</button>
</form>

<?php require "views/components/footer.php" ?>
