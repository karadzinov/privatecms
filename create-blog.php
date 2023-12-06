<?php

require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";

$users = selectAll($conn, 'users');

?>
    <div class="container">
        <div class="row mt-md-5">
            <div class="col-md-10">
                <form action="/process/add-blog.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-4">
                        <div class="col">
                            <input type="file" name="image" class="form-control" id="image">
                            <label class="form-label" for="image">Upload Image</label>
                            <?php

                            if(isset($_SESSION['error']['image'])) {
                                echo '<span class="error">'.$_SESSION['error']['image'].'</span>';
                            }

                            ?>
                        </div>
                    </div>


                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" name="title"/>
                                <label class="form-label" for="form3Example1">Title</label>
                                <?php

                                if(isset($_SESSION['error']['title'])) {
                                    echo '<span class="error">'.$_SESSION['error']['title'].'</span>';
                                }

                                ?>
                            </div>
                        </div>

                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <textarea id="description" class="form-control" name="description"> </textarea>
                        <label class="form-label" for="description">Description</label>
                        <?php

                        if(isset($_SESSION['error']['description'])) {
                            echo '<span class="error">'.$_SESSION['error']['descriptiion'].'</span>';
                        }

                        ?>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <select name="user_id" class="form-control" id="user_id">
                            <?php
                            foreach($users as $user) {
                                echo '<option value="'.$user['id'].'">'.$user['first_name'].' '.$user['last_name'].'</option>';
                            }


                            ?>
                        </select>
                        <label class="form-label" for="user_id">Users</label>
                        <?php

                        if(isset($_SESSION['error']['user_id'])) {
                            echo '<span class="error">'.$_SESSION['error']['user_id'].'</span>';
                        }

                        ?>
                    </div>



                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Create blog</button>

                </form>
            </div>

        </div>

    </div>
    <!-- End your project here-->
<?php require_once "./partials/dashboard-footer.php"; ?>