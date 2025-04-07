<?php
// FUNCtION tO SIGNUP USERS USING ARRAY.
// getting user innputs
$username = readline("Enter username here: ");
$email = readline("Enter email here: ");
$password = readline("Enter password here: ");

// singup function
function signup($username, $email, $password){
    // empty array to store user details.
    $users = [];
    // checking for empty fields
    if (empty($username) || empty( $email ) || empty($password)) {
       return "Fields cannot be empty";
       die();
    }

    // checking for password length
    if (strlen($password) < 8) {
       return "Password should be more than 8 characters";
       die();
    }

    // hashing password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // array push function to push the user details to empty array
    array_push($users, $email, $password, $username);
    // print out array details
    print_r($users);

    return "Hello $username your email address is $email";
}
// call the signup function
// when using return, make sure to include the echo when calling the function
echo signup($username, $email, $password);

