<?php

require_once "functions.php";

$id = $_GET['id'];

$user = selectOne($conn, 'users', $id);

$path = $_SERVER['DOCUMENT_ROOT'].'/uploads/'. $user['image'];
unlink($path);

deleteRow($conn, 'users', $id);

header('Location: /users.php');