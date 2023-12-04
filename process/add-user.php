<?php
session_start();
require_once "functions.php";
require_once "../helper/image_upload.php";

unset($_SESSION['error']);


$image = imageUpload('image');

if(isset($image['file'])) {
    $_SESSION['error']['image'] = $image['file'];
}


if(isset($_POST['first_name']) && !empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
} else {
    $_SESSION['error']['first_name'] = "First Name is required!";
    $first_name = '';
}


if(isset($_POST['last_name']) && !empty($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
} else {
    $_SESSION['error']['last_name'] = "Last Name is required!";
    $last_name = '';
}


if(isset($_POST['email']) && !empty($_POST['email'])) {

    $email = $_POST['email'];
} else {
    $_SESSION['error']['email'] = "Email is required!";
    $email = '';
}

if(isset($_POST['password']) && !empty($_POST['password'])) {

    $password = md5($_POST['password']);
} else {
    $_SESSION['error']['password'] = "Password is required!";
    $password = '';
}

if(isset($_SESSION['error']))
{
    ob_clean();
    header('Location: /create-user.php');

}




$data = ["first_name" => $first_name, "last_name" => $last_name, "email" => $email, "password" => $password, "image" => $image];

$user = insertRow($conn, 'users', $data);


if($user)
{
    header('Location: /users.php');
}
