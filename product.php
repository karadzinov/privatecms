<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$id = $_GET['id'];

$product = selectOne($conn, 'products', $id);



?>


    <div class="row">
        <div class="col-md-12 mt-4  m-lg-5">
            <h1>Product</h1>
            <p> Id: <?= $product['id'] ?> </p>
            <p> Name: <?= $product['name'] ?> </p>
            <p> Price: <?= $product['price'] ?> </p>
            <p> Type: <?= $product['type'] ?> </p>
            <p> Created at: <?= $product['created_at'] ?> </p>


            <a href="process/delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger">Delete Product</a>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>