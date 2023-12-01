<?php

require_once "functions.php";

$id = $_GET['id'];

deleteRow($conn, 'users', $id);

header('Location: /users.php');