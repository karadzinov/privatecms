<?php
require_once "./partials/dashboard-header.php";
require_once "./process/functions.php";


$products = selectAll($conn, 'products');

?>


    <div class="row">
        <div class="col-md-12 mt-4  m-lg-5">
            <h1>Users</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach($products as $product) {
                    echo '
                <tr>
                   <td>'.$product['id'].'</td>
                   <td>'.$product['name'].'</td>
                   <td>'.$product['price'].'</td>
                   <td>'.$product['type'].'</td>
      
                </tr>';
                }



                ?>

                </tbody>
            </table>
        </div>


    </div>

<?php require_once "./partials/dashboard-footer.php"; ?>