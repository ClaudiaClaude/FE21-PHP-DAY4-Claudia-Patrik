<?php

require 'db_connect.php';
require 'create.php';
require 'delete.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your personal Restaurant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand mx-4" href="#">Restaurant</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Delicious Dishes</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a> -->
                </li>
                </ul>
            </div>
        </nav>
    

        <!-- We will create a Restaurant Database (you can create it directly in php MyAdmin).

        The database should contain one table called dishes with columns dishID, image(URL link), name, price and meal description. If there are any columns that you think could compliment your project feel free to expand. 

        You should be able to:

        Display all meals

        Add a meal

        Delete a meal -->


        <div class="row">
            <?php

            $sql = "SELECT * FROM dishes";
            $result = mysqli_query($connect, $sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);




            
                
                foreach ($rows as $val) {
                    echo '<div class="container shadow mt-5 col col-12 col-sm-12 col-md-6 col-lg-3"
                    <div class="card" style="width: 18rem;">
                    <img src=' . $val["image"] . ' class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title mb-3">' . $val["name"] . '</h5>
                    <p class="card-text">' . $val["description"] . '<br><br> Price: ' . $val["price"] . ' &#8364;</p>
                    <a href="index.php?id=' . $val["dishesID"] . '" class="btn btn-outline-success">Delete</a>
                    </div>
                </div>
                ';
                }


                ?>

        </div>

        <div class="container py-4">

        <h5 class="mt-4">Add YOUR delicious dishes:</h5>
        
            <form method="post" class="my-4">
                <div class="form-group">
                    <input type="text" name="name" placeholder="name">
                    <input type="url" name="image" placeholder="image">
                    <input type="number" name="price" placeholder="price">
                    <input type="text" name="description" placeholder="description">
                    <input type="submit" name="submit" value="Add dish">
                </div>
            </form>
        </div>

     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>