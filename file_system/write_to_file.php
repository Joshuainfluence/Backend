<?php 

// $myfile = fopen("hello.txt", "w");
$myfile = fopen("hello.txt", "a");


$name = readline("Enter username: ") . "\n";
$password = readline("Enter password: ") . "\n";
// fwrite() function is used to write to file
fwrite($myfile, $name);
fwrite($myfile, $password);

// fclose function is used to close file, always at the end.
fclose($myfile);