<?php
$pageTitle = "Redigesana";

require "Validator.php";

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params) -> fetchAll();

$sql = "SELECT posts.*, categories.category_name FROM posts LEFT JOIN categories ON posts.category_id = categories.id WHERE posts.id = :id";
$params = ["id" => $_GET["id"]];
$catevalue = $db->query($sql, $params) -> fetch();


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $content = $_POST['content'];
    $categoriesID = $_POST['id'];
    $errors = [];
    if(!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if (!Validator::number($categoriesID, max: 50)){
        $errors["id"] = "Kategorijas ID nav cipars";
        }

    if(empty($errors)){
        $sql = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id;";

        $params = ["id" => $_GET["id"], "content" => $content, "category_id" => $categoriesID];
        $db->query($sql, $params);
        header("Location: /show?id= " . $_POST["id"]); 
        exit();
    }
}

require "views/posts/edit.view.php";


