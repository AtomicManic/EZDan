<?php

include "db/config.php";

session_start();

if(!isset($_SESSION['id'])){
    header("Location:" . URL . "index.php");
}

if($_SESSION['type'] == 1){
    header("Location:" . URL . "parentUserHomePage.php");
}
if(!isset($_GET['destname'])){
    header("Location:" . URL . "childUserHomePage.php");
}
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

    <body class="linesPageChild">
        <div class="container-fluid">
            <header>
                <?php include('includes/navbar.php');?>
            </header>
            <div class="row menu">
                <a href="childUserHomePage.php" class="col-4 menu-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Destinations</span>
                </a>
                <a href="#" class="col-4 menu-item">
                    <i class="fa-solid fa-wheelchair"></i>
                    <span>Accessibility</span>
                </a>
                <a href="#" class="col-4 menu-item">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </div>
            <div class="row fromToInfo">
                <section class="col-4 fromToItem">
                    <span>Ride From:</span>
                    <span class="fromToText" id="departure">From json</span>
                </section>
                <section class="col-6 fromToItem">
                    <span>Destination:</span>
                    <span class="fromToText"><?php echo $_GET['destname'] ?></span>
                </section>
            </div>
            <a href="childUserHomePage.php" type="button" class="btn btn-light changeBtn">Change</a>
        </div>
        <article class="row lineInfo">
            <div class="row walkAndLine">
                <div class="col-5 walkAndLineItem">
                    <span>100m</span>
                    <i class="fa-solid fa-person-walking"></i>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
                <div class="col-2 walkAndLineItem">
                    <span>61</span>
                </div>
                <div class="col-5 walkAndLineItem">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <i class="fa-solid fa-person-walking"></i>
                    <span>150m</span>
                </div>
            </div>
            <div class="row stationAndGrade">
                <div class="col-sm-4 stationAndGradeItam">
                    <span>From: <span class="bold">Bialik/Habanim</span></span>
                    <span>To: <span class="bold">Haroe'e/Tuval</span> </span>
                </div>
                <div class="col-sm-4 stationAndGradeItam">
                    <p>Grade</p>
                    <p class="bold">8.5</p>
                </div>
                <div class="col-sm-4 stationAndGradeItam">
                    <a href="ridePage.php?destname=<?php
                        echo $_GET['destname'];?>" type="submit" class="btn selectLineBtn">Select
                    </a>
                </div>
            </div>
        </article>
        <article class="row lineInfo">
            <div class="row walkAndLine">
                <div class="col-5 walkAndLineItem">
                    <span>100m</span>
                    <i class="fa-solid fa-person-walking"></i>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
                <div class="col-2 walkAndLineItem">
                    <span>161</span>
                </div>
                <div class="col-5 walkAndLineItem">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <i class="fa-solid fa-person-walking"></i>
                    <span>150m</span>
                </div>
            </div>
            <div class="row stationAndGrade">
                <div class="col-sm-4 stationAndGradeItam">
                    <span>From: <span class="bold">Bialik/Habanim</span></span>
                    <span>To: <span class="bold">Haroe'e/Tuval</span> </span>
                </div>
                <div class="col-sm-4 stationAndGradeItam">
                    <p>Grade</p>
                    <p class="bold">8.2</p>
                </div>
                <div class="col-sm-4 stationAndGradeItam">
                    <a href="ridePage.php?destname=<?php
                        echo $_GET['destname'];?>" type="submit" class="btn selectLineBtn">Select
                    </a>
                </div>
            </div>
        </article>
        <article class="row lineInfo">
            <div class="row walkAndLine">
                <div class="col-5 walkAndLineItem">
                    <span>70m</span>
                    <i class="fa-solid fa-person-walking"></i>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
                <div class="col-2 walkAndLineItem">
                    <span>125</span>
                </div>
                <div class="col-5 walkAndLineItem">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <i class="fa-solid fa-person-walking"></i>
                    <span>100m</span>
                </div>
            </div>
            <div class="row stationAndGrade">
                <div class="col-sm-4 stationAndGradeItam">
                    <span>From: <span class="bold">Elit/Arlozerov</span></span>
                    <span>To: <span class="bold">Haroe'e/Tuval</span> </span>
                </div>
                <div class="col-sm-4 stationAndGradeItam">
                    <p>Grade</p>
                    <p class="bold">8.0</p>
                </div>
                <div class="col-sm-4 stationAndGradeItam">
                    <a href="ridePage.php?destname=<?php
                        echo $_GET['destname'];?>" type="submit" class="btn selectLineBtn">Select
                    </a>
                </div>
            </div>
        </article>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="scripts/getRide.js"></script>
    </body>

</html>