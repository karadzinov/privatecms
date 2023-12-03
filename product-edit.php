<?php

require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";

$id = $_GET['id'];

$product = selectOne($conn, "products", $id);




?>
    <div class="container">
        <div class="row mt-md-5">
            <div class="col-md-10">
                <form action="/process/edit-product.php" method="post">


                    <input type="hidden" name="id" value="<?= $product['id']; ?>">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" name="name" value="<?= $product['name'] ?>"/>
                                <label class="form-label" for="form3Example1">Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example2" class="form-control" name="price" value="<?= $product['price'] ?>"/>
                                <label class="form-label" for="form3Example2">Price</label>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <select id="type" class="form-control" name="type">
                            <option value="new" <?php if($product['type'] === "new") { echo 'selected'; } ?>>New</option>
                            <option value="old" <?php if($product['type'] === "old") { echo 'selected'; } ?>>Old</option>
                        </select>
                        <label class="form-label" for="type">Select Type</label>
                    </div>





                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-warning btn-block mb-4">Edit product</button>

                </form>
            </div>

        </div>

    </div>
    <!-- End your project here-->
<?php require_once "./partials/dashboard-footer.php"; ?>