<?php require_once "./partials/header.php"; ?>
    <!-- Start your project here-->
    <div class="container">
        <div class="row mt-md-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="process/login.php" method="post">

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form7Example2" class="form-control" name="email"/>
                        <label class="form-label" for="form7Example2">Email address</label>
                    </div>

                    <!-- Pasword input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form7Example1" class="form-control" name="password"/>
                        <label class="form-label" for="form7Example1">Password</label>
                    </div>



                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Login</button>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>
    <!-- End your project here-->
<?php require_once "./partials/footer.php"; ?>