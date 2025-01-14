<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>
<h1>Blogs</h1>

<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
    <button>meklet</button>
</form>

<?php if (count($posts) == 0 ) { ?>
 <p>neka nav</p>
<?php } ?>

<ul>
    <?php foreach($posts as $post){ ?>
        <li><a href="show?id=<?= $post["id"] ?>"> <?= $post["content"] ?></a> </li>
    <?php } ?>
</ul>

<?php require "views/components/footer.php" ?>
