<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$users = selectAll($conn, 'users');

?>


    <div class="row">
        <div class="col-md-10 mt-4 m-lg-5">
            <h1>Users</h1>
            <p>
                <a href="create-user.php" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Create User</a>
            </p>

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($users as $user) {
                    echo '
                <tr>
                   <td><a href="/user.php?id='.$user['id'].'">'.$user['id'].'</a></td>
                   <td>'.$user['first_name'].'</td>
                   <td>'.$user['last_name'].'</td>
                   <td>'.$user['email'].'</td>
                   <td>'.$user['role_id'].'</td>
                   <td><a href="/user-edit.php?id='.$user['id'].'" class="btn btn-warning">Edit</a></td>
                </tr>';
                }



                ?>

                </tbody>
            </table>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>