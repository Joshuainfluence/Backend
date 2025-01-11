<?php
// $score = 50.5;
// $total = 100;
// $cutoff = $total/2;

// if ($score < $cutoff) {
//     echo "Sorry, you failed";
// }elseif($score == $cutoff){
//     echo "You are on average";
// }else{
//     echo "Congratulations, you passed well!";
// }



date_default_timezone_set("Africa/Lagos");
// $time = date("H");

// from 0 to 11 is morning
// from 12 to 17 is afternoon
// from 18 to 24 is night

// $time = 18;
// if ($time <= 11) {
//     echo "Good morning";
// } elseif ($time >= 12 && $time <= 17) {
//     echo "Good afternoon";
// }else{
//     echo "Good night";
// }

// $username = readline("Enter your username: ");
// $password = readline("Enter your password: ");
// $age = intval(readline("Enter your age: "));

// if($username !== "" || $password !== ""){
//     if(strlen($password) >= 8){
//         if($age >= 13){
//             echo "You have full access";
//         }else{
//             echo "YOu are too young to be using a phone";
//         }
//     }else{
//         echo "Passswords should not be less than 8 characters";
//     }
// }else{
//     echo "Fields cannot be empty";
// }

$code = readline("Enter USSD code: ");
$balance = "60MB";

if ($code == "*312#") {
    echo "Select plan \n 1)Data plan \n 2) Social bundle \n 3) Tiktok plan \n";
    $click = intval(readline("Select: "));
    if ($click == 1) {
        echo "You want to buy a data plan";
    } elseif ($click == 2) {
        echo "You want to buy a social bundle";
    } elseif ($click == 3) {
        echo "You want to do tiktok";
    } else {
        echo "Invalid code";
    }
} elseif ($code == "*310#") {
    echo "You balance is " . $balance;
} else {
    echo "Invalide USSD code";
}
