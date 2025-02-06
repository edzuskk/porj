<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?><br>

<h1>Rediget: "<?= htmlspecialchars($post["content"]) ?> "</h1>

<form method = "POST">
    <input type = "hidden" name="id" value = <?= $post["id"]?>>
    Saturs: <input name="content" value = "<?=$post['content'] ?? "" ?>">
    <label for = "category"> Kategorija: </label>
<select name = "id" id="category">
    <?php foreach($categories as $category): ?>
        <option value="<?= htmlspecialchars($category['id']) ?>" <?= $catevalue["category_name"] === $category["category_name"] ? 'selected' : '' ?>>
            <?= htmlspecialchars($category["category_name"]) ?>
        </option>
    <?php endforeach; ?>
</select>
<button>Rediget</button>
</form>

<?php require "views/components/footer.php" ?>
