<?php require_once "./partials/dashboard-header.php"; ?>
    <div class="container">
        <div class="row mt-md-5">
            <div class="col-md-10">
                <form action="/process/add-product.php" method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" name="name"/>
                                <label class="form-label" for="form3Example1">Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example2" class="form-control" name="price" />
                                <label class="form-label" for="form3Example2">Price</label>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <select id="type" class="form-control" name="type">
                            <option value="new" selected>New</option>
                            <option value="old">Old</option>
                        </select>
                        <label class="form-label" for="type">Select Type</label>
                    </div>





                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Create product</button>

                </form>
            </div>

        </div>

    </div>
    <!-- End your project here-->
<?php require_once "./partials/dashboard-footer.php"; ?>