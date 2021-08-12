<?php

require_once 'db_connect.php';

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $image = $_POST["image"];
    $price = $_POST["price"];
    $description = $_POST["description"]; 

    $sql = "INSERT INTO dishes (name, image, price, description) VALUES ('$name','$image','$price','$description')";
    if(mysqli_query($connect, $sql) == true){
    }

    

}

?>