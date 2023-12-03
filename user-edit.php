<?php

require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";

$id = $_GET['id'];

$user = selectOne($conn, 'users', $id);


?>

<div class="container">
    <div class="row mt-md-5">
        <div class="col-md-10">
            <form action="/process/update-user.php" method="post">


                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example1" class="form-control" name="first_name" value="<?= $user['first_name'] ?>"/>
                            <label class="form-label" for="form3Example1">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example2" class="form-control" name="last_name" value="<?= $user['last_name'] ?>"/>
                            <label class="form-label" for="form3Example2">Last name</label>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" name="email" value="<?= $user['email'] ?>"/>
                    <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" name="password" value="<?= $user['password'] ?>"/>
                    <label class="form-label" for="form3Example4">Password</label>
                </div>



                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-warning btn-block mb-4">Update user</button>

            </form>
        </div>

    </div>

</div>
<!-- End your project here-->
<?php

require_once "./partials/dashboard-footer.php";

?>
