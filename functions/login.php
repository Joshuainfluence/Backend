
<?php

// FUNCTION TO LOGIN USERS
$username = readline("Enter username: ");
$password = readline("Enter password: ");
function login($username, $password)
{
    $users = ["joshua", "passsord123"];

    if ($username !== $users[0] || $password !== $users[1]) {
        return "Invalid credentials";
        die();
    } else {

        return "Login successful";
    }
}

echo login($username, $password);
