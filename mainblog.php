<?php
require_once "./process/functions.php";
require_once "./partials/header.php";

$slug = $_GET['slug'];

$query =  "SELECT * FROM blogs WHERE slug='$slug'";

$db =  mysqli_query($conn, $query);
$blog = mysqli_fetch_assoc($db);

$user = selectOne($conn, 'users', $blog['user_id']);




?>

<div class="container">
        <div class="row">
            <div class="col">
                <h1><?= $blog['title'] ?></h1>
                <p><img src="/uploads/<?= $blog['image'] ?>" alt="><?= $blog['title'] ?>"></p>

                <p><?= $blog['description'] ?></p>
                <p>Author: <?= $user['first_name'] ?> <?= $user['first_name'] ?></p>

                <p>Created at: <?= $blog['created_at'] ?></p>
            </div>
        </div>
</div>
<?php

require_once "./partials/footer.php";

?>
