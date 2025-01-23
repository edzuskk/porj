<?php

require "Validator.php";

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET'){
    if(!Validator::string($_POST["id"])){
        
    }
}