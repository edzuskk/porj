<?php
require "functions.php";
require "Database.php";
require "config.php";
$config = require("config.php");

$db = new Database($config["database"]);

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE category_name LIKE :category_name"; 
    $params = ["category_name" => $search_query];
}

$categories = $db->query($sql, $params)->fetchAll();

echo "<h1>Kategorijas</h1>";
echo "<form action='/categories.php'>"; 
echo "<input name='search_query' />";
echo "<button type='submit'>Meklēt</button>";
echo "</form>";

if (count($categories) == 0) {
    echo "Nav atrastas kategorijas!!🤔💋";
} else {
    echo "<ul>";
    foreach ($categories as $category) {
        echo "<li>" . $category["category_name"] . "</li>"; 
    }
    echo "</ul>";
}
?>
