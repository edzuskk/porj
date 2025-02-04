<?php
$pageTitle = "Izveidosana";

require "Validator.php";

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        }
        if(empty($errors)){
            $content = $_POST['content'];
            $sql = "INSERT INTO posts (content) 
            VALUES(:content)";
            $params = ["content" => $_POST["content"]];
            $db->query($sql, $params);
            header("Location: /"); 
            exit();
        }
        }
require "views/posts/create.view.php";