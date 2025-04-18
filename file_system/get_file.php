<?php 

$myfile = "hello.txt";
$file = fopen($myfile, "r");
$users = [];
while(!feof($file)){
    $get = fgets($file);

    array_push($users, $get);
}
print_r($users);
fclose($file);