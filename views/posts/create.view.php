<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>
<h1>Izveidosana</h1>
<form method = "POST">
<label><input name="content" value="<?= $_POST['content'] ?? ""?>"  /></label>
<button>izveidot</button>
</form>

<?php if(isset($errors["content"])) { ?>
       <p class = "error"><?= $errors["content"] ?></p>
     <?php } ?>
