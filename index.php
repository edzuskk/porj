<?php
require "functions.php";
require "Database.php";

$config = require("config.php");

//dzekin tu esi nepareizaja mape

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

// dd($posts[0]["content"]);
// foreach
echo "<ul>";

foreach($posts as $post){
echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";


