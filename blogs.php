<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$blogs = selectAll($conn, 'blogs');

?>


    <div class="row">
        <div class="col-md-10 mt-4 m-lg-5">
            <h1>Blogs</h1>
            <p>
                <a href="create-blog.php" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Create Blog</a>
            </p>

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Slug</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($blogs as $blog) {
                    echo '
                <tr>
                   <td><a href="/blog.php?id=' . $blog['id'] . '">' . $blog['id'] . '</a></td>
                   <td>' . $blog['title'] . '</td>
                   <td><img src="/uploads/' . $blog['image'] . '" class="img-thumbnail" /></td>
                   <td>' . strip_tags(mb_strimwidth($blog['description'], 0, 200, "...")) . '</td>
                   <td>' . $blog['slug'] . '</td>
                   <td>' . $blog['created_at'] . '</td>
                   <td><a href="/blog-edit.php?id=' . $blog['id'] . '" class="btn btn-warning">Edit</a></td>
                </tr>';
                }



                ?>

                </tbody>
            </table>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>