<?php
require_once "./partials/header.php";
require_once "./process/functions.php";
?>
    <!-- Start your project here-->
    <div class="container">
        <div class="d-flex justify-content-center align-items-center mt-4">

                <div class="row">
                    <?php

                    $blogs = selectAll($conn, 'blogs');

                    foreach ($blogs as $blog) {
                        echo '<div class="col-md-4">
                    <div class="card">
                    <img src="/uploads/' . $blog['image'] . '" class="card-img-top" alt="' . $blog['title'] . '"/>
                    <div class="card-body">
                        <h5 class="card-title">' . $blog['title'] . '</h5>
                        <p class="card-text">' . mb_strimwidth($blog['description'], 0, 200, "...") . '</p>
                        <a href="/mainblog.php?slug=' . $blog['slug'] . '" class="btn btn-primary" data-mdb-ripple-init>Read more</a>
                    </div>
                </div>
                </div>
                ';
                    }


                    ?>

            </div>
        </div>
    </div>
    <!-- End your project here-->
<?php require_once "./partials/footer.php"; ?>