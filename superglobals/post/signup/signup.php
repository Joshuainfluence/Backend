<?php 
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

function signup($username, $email, $password){

    $users  = [];
    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Fields cannot be empty";
        header("Location: index.php");
        die();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Invalid email format";
        header("Location: index.php");
        die();

    }

    if (strlen($password) < 8) {
        $_SESSION['error'] = "Password must be atleast 8 characters";
        header("Location: index.php");
        die();

    }

    array_push($users, $username, $email, $password);

    $_SESSION['success'] = "Registration success!". print_r($users);
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: index.php");
    die();



}

echo signup($username, $email, $password);

