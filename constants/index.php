<?php 

include('constants.php');

$username = readline("Enter username: ");
if ($username !== USER) {
    echo "Wrong username";
    die();
}

echo "Correct!";

