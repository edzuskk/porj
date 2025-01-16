<?php
$pageTitle = "Redigesana";

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

require "views/posts/edit.view.php";


