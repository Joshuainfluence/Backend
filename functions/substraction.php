<?php
// accepting inputs
$x = readline("Enter the first value: ");
$y = readline("Enter the second value: ");
// Creating a function to perform simple substraction

// This function accepts two parameter, and subtract one from another
function substraction ($x, $y){
    echo $x - $y;
}

// calling the function 
// this will return the difference between the two values pass in place of the parameter.
substraction($x, $y);