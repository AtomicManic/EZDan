<?php
    include 'db/db.php';
    include 'services/login-service.php';
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
    </head>

    <body class="login-page">
        <div class="container-fluid">
            <header class="row top-header">
                <a href="#">
                    <img src="images/EZDan-logo.png" alt="">
                </a>
                <a href="#">Sign-up</a>
            </header>
            <main>
                <h1>EZDan</h1>
                <h2>Commuting made easy</h2>
                <div class="container login-container">
                    <h2>Login</h2>
                    <form action="#" method="post" id="login-frm">
                        <div class="form-group">
                            <label for="username-inpt">Username</label>
                            <input type="text" class="form-control" name="login-username" id="username-inpt"
                                aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="login-pass" id="password"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary" id="loginBtn">Submit</button>
                    </form>
                    <div class="container err-container" id="errors">
                        <div id="InsertUsernameErr" class="alert alert-warning" role="alert">
                            Please Insert a valid Username
                        </div>
                        <div id="InsertPasswordErr" class="alert alert-warning" role="alert">
                            Please Insert a valid Password
                        </div>
                        <?php if(isset($message)){
                            include 'alerts/warning-alert.php';
                        } ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Custom JS -->
    <script type="text/javascript" src="scripts/login.js"></script>

</html>