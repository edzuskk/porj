<?php
require "Validator.php";

$sql = "SELECT * FROM comments";
$params = [];
$comments = $db->query($sql, $params) -> fetchAll();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $aut = $_POST['krists'];
    $comment = $_POST['comment'];

    $errors = [];
    if (!Validator::string($_POST["krists"], max: 255)){
        $errors["krists"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        }

        if(empty($errors)){

            $sql = "INSERT INTO comments (aut, komentars, post_id) VALUES (:aut, :komentars, :post_id)";
            $params = ["aut" => $aut, "comment" => $comment];
            $db->query($sql, $params);

            header("Location: /"); 
            exit();
        }
        }
require "views/posts/create.view.php";