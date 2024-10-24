<?php
// a prompt to get user input of value
$car = readline("Enter new car: ");
// array of cars
$cars = ["BMW", "Venza"];

// array_push is a PHP in-built function for adding a value to the ending of an array
array_push($cars, $car);
// PHP function used for printing out array values
print_r($cars);
// to create a new line
echo "\n";
// PHP inbuilt function used for counting the values of an array
echo count($cars);