<?php

require "Validator.php";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
redirectIfNotFound();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["id"]) || !Validator::string($_POST["id"]) || $_POST["id"] <= 0) {
        header("Location: /categories/index");
        exit();
    }
    $sql = "DELETE FROM categories WHERE id = :id";
    $params["id"] = $_POST["id"];
    $db->query($sql, $params);
    header("Location: /categories/index");
    exit();
}
