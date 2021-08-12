<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "restaurant";

// //object oriented option
$connect = new mysqli($hostname, $username, $password, $dbName);

// //non-object oriented version

// $conn = mysqli_connect($hostname, $username, $password, $dbName)
?>