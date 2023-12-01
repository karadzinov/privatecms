<?php



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




$conn = mysqli_connect('localhost', 'homestead', 'secret', 'g5') or die();

if($conn) {

    $insert = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

    $query = mysqli_query($conn, $insert);

    if($query) {
       header('Location: /login.php');
    }


}