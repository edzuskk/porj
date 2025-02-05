<?php
$pageTitle = "Apskats";

if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$categories = $db->query($sql, $params)->fetch();

if(!$categories){
    redirectIfNotFound();
}


require "views/categories/show.view.php";