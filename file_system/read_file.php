<?php
$myfile = fopen("hello.txt", "r");

echo fread($myfile, filesize("hello.txt"));

fclose($myfile);

