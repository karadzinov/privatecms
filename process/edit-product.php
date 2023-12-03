<?php
require_once "functions.php";


if(isset($_POST['name']) && !empty($_POST['name'])) {
$name = $_POST['name'];
} else {
$name = '';
}


if(isset($_POST['price']) && !empty($_POST['price'])) {
$price = $_POST['price'];
} else {
$price = '';
}


if(isset($_POST['type']) && !empty($_POST['type'])) {
$type = $_POST['type'];
} else {
$type = '';
}



$data = ["name" => $name, "price" => $price, "type" => $type];


$id = $_POST['id'];


$product = updateRow($conn, 'products', $data, $id);

if($product) {
    header('Location: /products.php');
}