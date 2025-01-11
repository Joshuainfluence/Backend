<?php

$users = array(
    "influence"=>["Okoh Praise", "19", "Uniben"],
    "faith"=>["Okoh Faith", "23", "Unical"],

    "matthew"=>["Okoh Matthew", "26", "Delsu"],

);

// print_r($users);
$userss = array(
    0=>["Okoh Praise", "19", "Uniben"],
   1=>["Okoh Faith", "23", "Unical"],

    2=>["Okoh Matthew", "26", "Delsu"],

);
$use = count($userss, COUNT_NORMAL);
for ($i=0; $i < $use; $i++) { 
    // for ($j=0; $j < $use; $j++) { 
    //    print_r($userss[$i][2]);
    //    echo "\n";
    //    die;
    // }
    print_r($userss[$i][0]);
}
// echo $use;
// echo count($userss, COUNT_NORMAL);
// print_r($userss[1][2]);