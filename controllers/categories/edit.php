<?php
$pageTitle = "Redigesana";

require "Validator.php";

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$categories = $db->query($sql, $params)->fetch();

if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST"){
    $errors = [];
    if(!Validator::string($_POST["category_name"], max: 50)){
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if(empty($errors)){
        $sql = "UPDATE categories
        SET category_name = :category_name
        WHERE id = :id;";
        $params["category_name"] = $_POST["category_name"];
        $db->query($sql, $params);
        header("Location: /show?id= " . $_POST["id"]); 
        exit();
    }
}

require "views/categories/edit.view.php";


