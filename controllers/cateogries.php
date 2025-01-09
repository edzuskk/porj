<?php
//meklesana
if(isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query";
    $params = ["search_query" => $search_query];
}

echo "<form>";
echo "<input name='search_query'/>";
echo "<button>meklet</button>";
echo "</form>";

echo "<ul>";
foreach($posts as $post){
echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";