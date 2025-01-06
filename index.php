<?php
require "functions.php";
require "Database.php";

$config = require("config.php");

//dzekin tu esi nepareizaja mape

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

//meklesana
if(isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    dd("SELECT * FROM posts WHERE content LIKE ". $_GET["search_query"]);
    $posts = $db->query("SELECT * FROM posts WHERE content LIKE ". $_GET["search_query"])->fetchAll();
}

// dd($posts[0]["content"]);
// foreach
echo "<form>";
echo "<input name='search_query'/>";
echo "<button>meklet</button>";
echo "</form>";

echo "<ul>";
foreach($posts as $post){
echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";


