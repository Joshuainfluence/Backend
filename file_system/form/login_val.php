<?php





function read_file()
{
    $location = "db.txt";
    $file = fopen($location, "r");
    $array = [];
    while (!feof($file)) {
        $get = fgets($file);

        array_push($array, $get);
    }

    fclose($file);
    return $array;
}

function val_i()
{
   
    // print_r($data);
    // $val = count($data);
    // echo $val . "\n";

    $username = readline("Enter username:");
    $name = readline("Enter name:");
    $password = readline("Enter password:");
    $data = read_file();
    foreach ($data as $key => $value) {
    //    print_r($data);
        echo $value;
        if (trim($username) == trim($value)) {
            echo "User is found \n";
        } else {
            echo "User not found";
            die();
        }
        $passwords = $data[$key + 6];
        if (trim($password) == trim($passwords)) {
            echo $password . " is correct";
            die();
        } else {
            echo "wrong password";
            die();
        }
        // } else {
        //     echo "Not divible by 9";
        //     die();
        // }
    }
}

echo val_i();
