<?php 

$myfile = fopen("hello.txt", "w");
$name = readline("Enter username: ") . "\n";
// fwrite() function is used to write to file
fwrite($myfile, $name);
// fclose function is used to close file, always at the end.
fclose($myfile);