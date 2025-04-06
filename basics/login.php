<?php 

// username is joshua-> $user[0], password is influence-> $user[1]
$user = ["joshua", "influence"];
echo $user[0];
$username = readline("Enter username: ");
if ($username !== $user[0]) {
    echo "Error-> User not found!";
    die();
}


$password = readline("Enter password: ");
if ($password !== $user[1]){
    echo "Error-> Incorrect password!";
}


echo "Login successful";


