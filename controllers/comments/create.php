<?php
require "Validator.php";

$sql = "SELECT * FROM comments";
$params = [];
$comments = $db->query($sql, $params) -> fetchAll();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $aut = $_POST['krists'];
    $komentars = $_POST['comment'];
    $commentID = $_POST['id'];

    $errors = [];
    if (!Validator::string($_POST["krists"],min: 1, max: 50)){
        $errors["krists"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if (!Validator::string($_POST["comment"],min: 3, max: 50)){
        $errors["comment"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
        if(empty($errors)){
            $sql = "INSERT INTO comments (aut, komentars, post_id) VALUES (:aut, :komentars, :post_id)";
            $params = ["aut" => $aut, "komentars" => $komentars, "post_id" => $commentID];
            $db->query($sql, $params);
            header("Location: /show?id=" . $_POST["id"]);
            exit();
        }
        }
?>