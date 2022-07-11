<?php
    include "services/users-serivce.php";
    echo 'id: ' . $_SESSION['id'] .', name: ' . $_SESSION['name'];
    echo $_SESSION['img'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="parantHomePage">
    <div class="container-fluid">
        <header class="row top-header">
            <div class="col-6 headerItem">
                    <a href="#" id="logo">
                    <img src="images/EZDan-logo.png" alt="">
                </a>
                </div>
                <div class="col-6 headerItem">
                <a href="#">
                    <img src="<?php echo $_SESSION['img']; ?>" alt="avatar">
                </a>
            </div>
        </header>
    </div>
        <h1 class="row">Hi <?php echo $_SESSION['name'] ?></h1>
        <section class="container-fluid">
            <?php
                echo '<div class="row users">';
                while($row = mysqli_fetch_assoc($result)){
                    echo '<article class="col-sm-4 userItem">';
                    echo    '<a href="childUser.php?childId='.$row['id'].'">';
                    echo        '<img src='.$row['img_url'].'>';
                    echo        '<h3>'.$row['name'].'</h3>';
                    echo    '</a></article>';
                }
            ?>
        </section>
    </body>
</html>