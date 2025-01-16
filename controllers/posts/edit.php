<?php
$pageTitle = "Rediģēšana";

require "Validator.php";

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)) {
        $errors[] = "Aizpildi formu vai ievadi saturu, kas nav garāks par 50 rakstzīmēm";
    }
    if (empty($errors)) {
        $sql = "UPDATE posts
                SET content = :content
                WHERE id = :id";
        $params = [
            "content" => $_POST["content"],
            "id" => $_POST["id"]
        ];
        $db->query($sql, $params);
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

require "views/posts/edit.view.php";
?>
