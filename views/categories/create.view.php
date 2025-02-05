<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>
<h1>Kategorijas izveidosana</h1>
<form method = "POST">
<label><input name="category_name" value="<?= $_POST['category_name'] ?? ""?>"  /></label>
<button>izveidot</button>
</form>

<?php if(isset($errors["category_name"])) { ?>
       <p class = "error"><?= $errors["category_name"] ?></p>
     <?php } ?>
