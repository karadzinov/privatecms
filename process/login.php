<?php
session_start();


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




$conn = mysqli_connect('localhost', 'homestead', 'secret', 'g5');

$query = "SELECT * FROM users";


$result = mysqli_query($conn, $query);


while($user = mysqli_fetch_assoc($result)) {
    if(($user['email'] === $email) && ($user['password'] === $password)) {
            $_SESSION['user'] = $user;
            header('Location: /dashboard.php');
    }
}





