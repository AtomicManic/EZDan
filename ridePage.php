<!DOCTYPE html>
<html>
    <head>
    <title>Ride Page</title>
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
    <body class="ride-page">
        <div class="container-fluid">
            <header class="row top-header"></header>
            <?php
                //if user type is 1, add a row, otherwise - not
            ?>
            <div class="row menu">
                <a class="col-4 menu-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Destinations</span>       
                </a>
                <div class="col-4 menu-item">
                    <i class="fa-solid fa-wheelchair"></i>
                    <span>Accessibility</span>
                </div>
                <div class="col-4 menu-item">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </div>
            </div>
        </div>
        <script src="scripts/getRide.js"></script>
    </body>
</html>