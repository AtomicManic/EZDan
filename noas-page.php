<?php
    include 'db/db.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EZDan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- LINKS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="noas-page">
        <header class= "container-fluid">
            <!-- <section class= "row top-header">
                <nav>
                    here goes the nav
                </nav>
                <a href="#" class = "EZDan-logo">logo</a>
                <a href="#" class= main-user-img>AlonaIMage</a>
            </section>
            <section class= "row middle-header">

            </section>
            <section class= "row bottom-header">

            </section> -->
        </header>
        <main>
            <h3>My Destinations</h3>

            <?php
                $query = "SELECT * FROM dbShnkr22studWeb1.tbl_destinations_202 WHERE user_id = 6;"; // ADD DYNAMIC ID FROM SESSION $$$$$$$$$$$$
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die ("DB query failed");
                }
                else 
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
                        <section class ='destinations containet-fluid'>
                           <div class='destination row'>
                               <div class='col-3 destination-details destination-name'>
                                   <span>
                                       <?php echo $row['name'] ?>
                                   </span>
                               </div>
                               <div class='col-3 destination-details'>
                                   <span>
                                       <?php echo $row['street'] . " " . $row['house_number'] . " " . $row['city'] ?>
                                   </span>
                               </div>
                               <div class='col-6 destination-details'>
                                   <div class='row justify-content-center'>
                                       <button type='button' class='btn btn-info btn-sm col-6'>Choose line</button>
                                   </div>
                                   <div class='row'>
                                       <div class='col'>
                                           <button type='button' class='btn btn-outline-secondary btn-sm edit-btn'>Edit</button>
                                       </div>
                                       <div class='col'>
                                           <button type='button' class='btn btn-outline-secondary btn-sm delete-btn'>Delete</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </section>
            
            <?php   } ?>
            <div class="add-destination-btn">
                <a href="add-destination.php"><button type="button" class="btn btn-primary">Add destination</button></a>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>

<?php
  mysqli_close($connection);
?>