<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['date'];
    $gender = $_POST['male'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_con = $_POST['password_con'];
    $number = $_POST['number'];

    if(empty($firstname) || empty($lastname) || empty($dob) || empty($gender) || empty($email) || empty($username) || empty($password) || empty($password_con) || empty($number)){
        $_SESSION['error'] = "Fields cannot be empty";
        header("Location: index.php");
        die();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Invalid email format";
        header("Location: index.php");
        die();
    }

    if($password != $password_con){
        $_SESSION['confirm'] = "Passwords do not match";
        header("Location: index.php");
        die();
    }
    $filename = "db.txt";
    $file = fopen($filename, "a");

    fwrite($file, $firstname . "\n");
    fwrite($file, $lastname . "\n");
    fwrite($file, $dob . "\n");
    fwrite($file, $gender . "\n");
    fwrite($file, $email . "\n");
    fwrite($file, $username . "\n");
    fwrite($file, $password . "\n");
    fwrite($file, $password_con . "\n");
    fwrite($file, $number . "\n");
  

    
    fclose($file);

    $_SESSION['success'] = "Registration successful";
    header("Location: index.php");


}
