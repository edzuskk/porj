<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>
<h1>Izveidosana</h1>
<form method = "POST">
<label><input name="content" value="<?= $_POST['content'] ?? ""?>"  /></label>
<label>Kategorija: <select name="id">
  <?php foreach($categories as $category){?>
  <option name="id" value="<?= htmlspecialchars($category["id"]) ?>">
    <?= $category["category_name"] ?></option>
  <?php } ?>
  </select>
<button>izveidot</button>
</form>

<?php if(isset($errors["content"])) { ?>
       <p class = "error"><?= $errors["content"] ?></p>
     <?php } ?>
