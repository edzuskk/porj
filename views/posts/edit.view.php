<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>
<h1>Rediģēšana</h1>
<form method = "POST">
<input type = "hidden" name="id" value = <?= $post["id"] ?? ""?>>
<input name="content" value = <?= $post["content"] ?? ""?>>
<button>Rediģēt</button>
</form>
<?php
