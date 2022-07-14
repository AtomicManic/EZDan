<?php
session_start();

include "db/config.php";

if(!isset($_SESSION['id'])){
    header("Location:" . URL . "index.php");
} else if ($_SESSION['type'] == 1){
    header("Location:" . URL . "parentUserHomePage.php");
} 

include "services/getDestinationsList-service.php";

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Home Page</title>
        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="childUserHomePage">
        <div class="container-fluid">
            <header>
                <?php include('includes/navbar.php'); ?>
            </header>
            <?php include "includes/childHeader.php" ?>
            <section class="row destinationsList">
                <?php
            include 'services/showDestinationsList-service.php'
            ?>
                <div class="add-destination-btn">
                    <a href="add-destination.php"><button type="button" class="btn btn-primary">Add
                            destination</button></a>
                </div>
            </section>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>

</html>