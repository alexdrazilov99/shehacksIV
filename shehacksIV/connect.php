<?php

$dbhost = "db";
$dbuser= "root";
$dbpass = "shehacksIV";
$dbname = "shehacksIV";
$connection = new mysqli($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
 die("Database connection failed :" .
 mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
 } //end of if statement
?>

