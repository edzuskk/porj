<?php
$pageTitle = "Izveidosana";

require "Validator.php";

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params) -> fetchAll();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $content = $_POST['content'];
    $categoriesID = $_POST['id'];

    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        }

    if (!Validator::number($categoriesID, max: 50)){
        $errors["id"] = "Kategorijas ID nav cipars";
        }

        if(empty($errors)){

            $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
            $params = ["content" => $content, "category_id" => $categoriesID];
            $db->query($sql, $params);

            header("Location: /"); 
            exit();
        }
        }
require "views/posts/create.view.php";