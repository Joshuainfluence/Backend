<?php 
// fopen function to creeate file
// first parameter is the file name, if file does not exist, it creates it.
// second parameter "w" is to write to file.

$myfile = fopen("hello.txt", "w") or die("Unable to open file");