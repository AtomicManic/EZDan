<?php
session_start();

include "db/config.php";

if(!isset($_SESSION['id'])){
    header("Location:" . URL . "index.php");
}

if($_SESSION['type'] == 2){
    header("Location:" . URL . "childUserHomePage.php");
} else if( $_SESSION['type'] == 1 && !isset($_GET['childId'])) {
    header("Location:" . URL . "ParentUserHomePage.php");
}

include "services/getDestinationsList-service.php";
include "services/getUser-service.php";

?>

<!DOCTYPE html>
<html>

    <head>
        <title>EZDan</title>
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

    <body class="childUserUnderParent">
        <div class="container-fluid">
            <header>
                <?php include('includes/navbar.php'); ?>
            </header>

            <div class="row childHeader">
                <a href="#">
                    <?php
                if ($row2['img_url'] == null) {
                    echo '<i class="fa-solid fa-user"></i>';
                } else {
                    echo '<img src="';
                    echo $row2['img_url'];
                    echo '" alt="">';
                }

                echo '<h1>' . $row2['name'] . '</h1>';
                ?>
                </a>

            </div>
            <div class="row childEditOptions">
                <div class="col-sm-4 editBtn">

                </div>
                <div class="col-sm-4 editBtn">
                    <a href="userForm.php?childId=<?php echo $row2['id'] . "&&button=edit"; ?>
                    " type="button" id="editUserBtn" class="btn btn-secondary editBtnItem">Edit</a>

                    <a href="<?php echo "services/userDelete-service.php?childId=" . $row2['id']; ?>" type="button"
                        id="deleteUserBtn" class="btn btn-danger editBtnItem">Delete</a>
                </div>
                <div class="col-sm-4 editBtn"></div>
            </div>
            <section class="row destinationsList">
                <?php
            include 'services/showDestinationsList-service.php';
            ?>
                <div class="add-destination-btn">
                    <a href="add-destination.php?childId=<?php echo $_GET['childId']; ?>">
                        <button type="button" class="btn btn-primary">Add destination</button>
                    </a>
                </div>
            </section>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>

</html>