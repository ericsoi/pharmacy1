<?php


$host ="localhost";
$user ="root";
$password= "";
$dbname = "pharmacy";


$con =mysqli_connect($host,$user,$password,$dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}

?> 