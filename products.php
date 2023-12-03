<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$products = selectAll($conn, 'products');

?>


    <div class="row">
        <div class="col-md-12 mt-4  m-lg-5">
            <h1>Products</h1>
            <p>
                <a href="create-product.php" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Create Product</a>
            </p>

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach($products as $product) {
                    echo '
                <tr>
                   <td><a href="/product.php?id='.$product['id'].'">'.$product['id'].'</a></td>
                   <td>'.$product['name'].'</td>
                   <td>'.$product['price'].'</td>
                   <td>'.$product['type'].'</td>
                    <td><a href="/product-edit.php?id='.$product['id'].'" class="btn btn-warning">Edit</a></td>        
                </tr>';
                }



                ?>

                </tbody>
            </table>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>