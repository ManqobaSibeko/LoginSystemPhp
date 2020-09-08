<?php
$servename ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="loginsystem";

$conn = mysqli_connect($servename,$dbUsername,$dbPassword,$dbName);

// check if the connection between database and php failed
if (!$conn){
    die ("Connection failed: " .mysqli_connect_error());
}
?>