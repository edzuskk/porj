<?php require "views/posts/create.view.php";
$pageTitle = "Izveidosana";
dd($_SERVER);
$sql = "INSERT INTO content VALUES (content)";
$params = ["content" => $_POST["content"]];
header("Location: /"); 
exit();