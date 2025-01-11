<?php
// Loops through a block of code for each element in an array
// It works only on arrays

// this is an example of associative array, indexed array is shown in the video
$users = array("John"=> 35, "peter"=>24, "Sophia"=>18, "Emma"=>30, "Influence"=>22);

foreach($users as $key => $value){
    echo "$key is $value \n";
}