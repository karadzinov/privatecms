<?php

require_once "functions.php";

$id = $_GET['id'];

deleteRow($conn, 'products', $id);

header('Location: /products.php');