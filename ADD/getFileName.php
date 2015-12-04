<?php
$currentFile = $_SERVER["PHP_SELF"]; //get the full file path
$parts = Explode('/', $currentFile); //split the path in to an array on /
$filename = $parts[count($parts) - 1]; //get the last element of the parts array which is the just the file name

echo $currentFile; //prints the full path to the file
echo $filename; //prints just the file name with extension
?>