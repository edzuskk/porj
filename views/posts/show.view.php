<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?> </h1>
<p>Kategorija: <?= $post["category_name"] ?? "Nav kateto"?> </p>

<a href="edit?id=<?= $post["id"] ?>">Rediget</a><br>

<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst</button>
</form>

<form actiom = "/comments/create" method = "POST">
        Aotars: <input name="krists"><br>
        Pievienot komentaru: <input name="comment"> <br>
        <button type= "submit" > Iesniegt </button>
</form>


<?php require "views/components/footer.php" ?>
