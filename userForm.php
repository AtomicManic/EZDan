<?php
include "db/config.php";
session_start();

if(!isset($_SESSION['id'])){
    header("Location:" . URL . "index.php");
}

if($_SESSION['type'] == 2){
    header("Location:" . URL . "childUserHomePage.php");
}

if(!isset($_GET['button'])){
    header("Location:" . URL . "parentUserHomePage.php");
}

if (isset($_GET['childId'])) {
    include "services/getUser-service.php";
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Login Page</title>
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
                <?php include ('includes/navbar.php'); ?>
            </header>
            <div class="container-fluid userFormContainer">
                <h2 class="row">
                    <?php
                        if (isset($_GET['button']) && $_GET['button'] == 'edit') {
                            echo "Update " . $row2['name'] . "'s details";
                        }
                        else if (isset($_GET['button']) && $_GET['button'] == 'create') {
                            echo "Create New User";
                        }
                    ?>
                </h2>
                <div class="container-fluid userForm">
                    <form id="userForm" method="POST" action="
                        <?php
                            if (isset($_GET['button']) && $_GET['button'] == 'edit') {
                                echo 'services/editUser-service.php?childId=' . $_GET['childId'];
                            }
                            else if (isset($_GET['button']) && $_GET['button'] == 'create') {
                                echo 'services/addUser-service.php';
                            }
                        ?>">
                        <div class="form-group">
                            <label for="userName">Name</label>
                            <input type="text" class="form-control" id="userName"
                                placeholder="Insert a Name for the user" name="name" <?php
                                    if (isset($_GET['button']) && $_GET['button'] == 'edit') {
                                        echo ' value="' . $row2['name'] . '"';
                                    }
                                ?>>
                        </div>
                        <div class="form-group">
                            <label for="userName">Username</label>
                            <input type="text" class="form-control" id="userUserName"
                                placeholder="Insert a username for the user" name="user_name" <?php
                                    if (isset($_GET['button']) && $_GET['button'] == 'edit') {
                                        echo ' value="' . $row2['user_name'] . '"';
                                    }
                                ?>>
                        </div>
                        <div class="form-group">
                            <label for="userPassword">Password</label>
                            <input type="password" class="form-control" id="userPassword" placeholder="Password"
                                name="password">
                            <small id="passwordHelp" class="form-text text-muted">must be 5 digits or more</small>
                        </div>
                        <div class="row userBtns">
                            <div class="col-8 userBtnsItem">
                                <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-4 userBtnsItem">
                                <a href="
                                <?php
                                    if (isset($_GET['childId'])) {
                                        echo "childUser.php?childId=" . $_GET['childId'];
                                    }
                                    else {
                                        echo "parentUserHomePage.php";
                                    }?>" type="button" id="cancelBtn" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <div class="container userErrcontainer" id="errors">
                        <div id="userInsertNameErr" class="alert alert-warning" role="alert">
                            Please Insert a valid Name
                        </div>
                        <div id="userInsertUsernameErr" class="alert alert-warning" role="alert">
                            Please Insert a valid Userame
                        </div>
                        <div id="userInsertPasswordErr" class="alert alert-warning" role="alert">
                            Please Insert a valid Password
                        </div>
                        <div id="userInsertValidPasswordErr" class="alert alert-warning" role="alert">
                            Password must have at least 5 digits
                        </div>
                        <?php if (isset($message)) {
                            include 'alerts/warning-alert.php';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="scripts/userForm.js"></script>
    </body>

</html>