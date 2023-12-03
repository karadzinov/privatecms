<?php

require_once "functions.php";


if(isset($_POST['first_name']) && !empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
} else {
    $first_name = '';
}


if(isset($_POST['last_name']) && !empty($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
} else {
    $last_name = '';
}


if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

if(isset($_POST['password']) && !empty($_POST['password'])) {
    $password = md5($_POST['password']);
} else {
    $password = '';
}


$data = ["first_name" => $first_name, "last_name" => $last_name, "email" => $email, "password" => $password];

$user = insertRow($conn, 'users', $data);


if($user)
{
    header('Location: /users.php');
}