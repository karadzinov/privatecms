<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$id = $_GET['id'];

$blog = selectOne($conn, 'blogs', $id);

$user = selectOne($conn, 'users', $blog['user_id']);


?>


    <div class="row">
        <div class="col-md-12 mt-4  m-lg-5">
            <h1>Blog</h1>
            <div class="row">
                <div class="col">
                    <img src="/uploads/<?= $blog['image']; ?>" alt="<?= $blog['title'] ?>">
                </div>
            </div>
            <p> Id: <?= $blog['id'] ?> </p>
            <p> Title: <?= $blog['title'] ?> </p>
            <p> Description: <?= $blog['description'] ?> </p>
            <p> Created at: <?= $blog['created_at'] ?> </p>
            <p> User: <?= $user['first_name'] ?> <?= $user['last_name'] ?>  </p>


            <a href="process/delete-blog.php?id=<?= $blog['id'] ?>" class="btn btn-danger">Delete Blog</a>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>