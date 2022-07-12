<?php
    include "services/getUsers-serivce.php";
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
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="parantHomePage">
        <div class="container-fluid parantHomePageContainer">
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
            <h1 class="row">Hi <?php echo $_SESSION['name']; ?>!</h1>
            <h3 class="row usersTitle">My users</h3>
            <!-- <div class="row"> -->
                <section class="container-fluid usersContainer">
                <?php
                    echo '<div class="row users">';
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<article class="col-sm-4 userItem">';
                        echo    '<a href="childUser.php?childId='.$row['id'].'">';
                        if($row['img_url'] == null){
                            echo '<i class="fa-solid fa-user"></i>';
                        } else {
                            echo '<img src='.$row['img_url'].'>';
                        }
                        echo        '<h3>'.$row['name'].'</h3>';
                        echo    '</a></article>';
                    }
                ?>
                </section>
            <!-- </div> -->
            <div class="row btnRow">
                <a type="submit" href="userForm.php?button=create" id="addUserBtn" class="btn btn-primary" >+ Add user</a>
            </div>
        </div>
    </body>
</html>

<?php
    mysqli_close($connection);
?>