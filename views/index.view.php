<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbins</title>
</head>
<body>
<h1>blogs</h1>

<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
    <button>meklet</button>
</form>

<ul>
    <?php foreach($posts as $post){ ?>
        <li> <?= $post["content"] ?> </li>
    <?php } ?>
</ul>

</body>
</html>