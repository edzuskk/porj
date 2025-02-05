<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>
<h1>Blogs - Kategorijas</h1>



<?php if (count($categories) == 0 ) { ?>
 <p>neka nav</p>
<?php } ?>

<ul>
    <?php foreach($categories as $categorys){ ?>
        <li><a href="show?id=<?= $categorys["id"] ?>"> <?= htmlspecialchars($categorys["category_name"]) ?></a> </li>
    <?php } ?>
</ul>

<?php require "views/components/footer.php" ?>
