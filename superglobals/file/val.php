<?php 
session_start();
$location = "uploads/";

$name = $_FILES["fileupload"]["name"];
$target_file= $location . basename($name);
$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

$tmp_name= $_FILES["fileupload"]["tmp_name"];

$size = $_FILES['fileupload']['size'];


 if(file_exists($target_file)){
    $_SESSION['error'] = "Sorry file already exists";
    header("Location: index.php");
    die();
 }

 if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") {
    $_SESSION['error'] = "Sorry, file format not allowed";
    header("Location: index.php");

    die();
 }

 if ($size > 500000) {
    $_SESSION['error'] = "Sorry, your file is too large.";
    header("Location: index.php");

    die();
 }



 if (move_uploaded_file($tmp_name, $target_file)) {
   $_SESSION['success'] = "File uploaded successfully";
    header("Location: index.php");

   die();
 }else{
    $_SESSION['error'] = "Sorry, there was an error";
    header("Location: index.php");

    die();
 }

