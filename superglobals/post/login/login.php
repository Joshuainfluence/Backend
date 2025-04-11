<?php 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

function login( $email, $password){

 
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Fields cannot be empty";
        header("Location: index.php");
        die();
    }

    if ($_SESSION['email'] !== $email || $_SESSION['password'] !== $password) {
        $_SESSION['[error'] = "Invalid login credentials";
        header("Location: index.php");
        die();
    }

   

    $_SESSION['success'] = "Login successful!";
    header("Location: index.php");
    die();

}

echo login($email, $password);

