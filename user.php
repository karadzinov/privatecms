<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$id = $_GET['id'];

$user = selectOne($conn, 'users', $id);



?>


    <div class="row">
        <div class="col-md-12 mt-4  m-lg-5">
            <h1>User</h1>
            <p> First Name: <?= $user['first_name'] ?> </p>
            <p> Last Name: <?= $user['last_name'] ?> </p>
            <p> Email: <?= $user['email'] ?> </p>

            <a href="process/delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger">Delete User</a>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>