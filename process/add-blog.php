<?php
session_start();
require_once "functions.php";
require_once "../helper/image_upload.php";

unset($_SESSION['error']);


$image = imageUpload('image');

if(isset($image['file'])) {
    $_SESSION['error']['image'] = $image['file'];
}


if(isset($_POST['title']) && !empty($_POST['title'])) {
    $title = $_POST['title'];
} else {
    $_SESSION['error']['title'] = "Title is required!";
    $title = '';
}


if(isset($_POST['description']) && !empty($_POST['description'])) {
    $description = $_POST['description'];
} else {
    $_SESSION['error']['description'] = "Description is required!";
    $description = '';
}



$cleanTitle = strip_tags(htmlspecialchars(strtolower($title)));

$cleanTitle = str_replace('(', '', $cleanTitle);
$cleanTitle = str_replace(')', '', $cleanTitle);
$cleanTitle = str_replace(',', '', $cleanTitle);

$slug = explode(' ', $cleanTitle);

$slug = implode('-', $slug);



if(isset($_POST['user_id']) && !empty($_POST['user_id'])) {

    $user_id = $_POST['user_id'];
} else {
    $_SESSION['error']['user_id'] = "Please select user!";
    $user_id = '';
}

if(isset($_SESSION['error']))
{
    ob_clean();
    header('Location: /create-blog.php');

}




$data = ["title" => $title, "description" => $description, "slug" => $slug, "user_id" => $user_id, "image" => $image];




$blog = insertRow($conn, 'blogs', $data);



if($blog)
{
    header('Location: /blogs.php');
}
