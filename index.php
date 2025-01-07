<?php
require "functions.php";
require "Database.php";

$config = require("config.php");



$db = new Database($config["database"]);

$sql = "SELECT * FROM posts";
$params = [];
//meklesana
if(isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query";
    $params = ["search_query" => $search_query];
}

$posts = $db->query($sql, $params)->fetchAll();

$d = "Liels";
$d .= "suns";

// dd($posts[0]["content"]);
// foreach
echo "<h1>Blogs<h1>";
echo "<form>";
echo "<input name='search_query'/>";
echo "<button>meklet</button>";
echo "</form>";

if (count($posts) == 0 ) {
echo "Nav atrasts!!🤔💋" ;
}
echo "<ul>";
foreach($posts as $post){
echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";


