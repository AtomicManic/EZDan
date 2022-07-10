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
    <body class="add-destination">
        <header class= "container-fluid">
          
        </header>
        <main>
            <h3>Add destination</h3>
            <form action="#" method="POST">
            <div class="container">
                <div class="form-question">
                    <div>
                    <Label for="dest_name">Destination name:</Label>
                    </div>
                    <input type="text" id="dest_name" name= "dest_name" placeholder= "Name">
                </div>
                
                <div class="form-question">
                    <div>
                        <Label for="dest_city">*City:</Label>
                    </div>
                    <input type="text" id="dest_city" name= "dest_city" placeholder= "City" required>
                </div>

                <div class="form-question">
                    <div>
                        <Label for="dest_name">*Street:</Label>
                    </div>
                    <input type="text" id="dest_street" name= "dest_street" placeholder= "Street" required>
                </div>

                <div class="form-question">
                    <div>
                        <Label for="dest_name">*Number:</Label>
                    </div>
                    <input type="number" id="dest_number" name= "dest_number" placeholder= "999" required>
                </div>

                <div class="form-question">
                    <div>
                        <Label for="dest_name">Home:</Label>
                        <input type="radio" id="dest_home" name= "dest_home_or_work" value="home">
                        <Label for="dest_name">Work:</Label>
                        <input type="radio" id="dest_work" name= "dest_home_or_work" value="work">
                    </div> 
                </div>
            </div>
                <div class="form-question submit-btn">
                    <button type="submit" class="btn btn-primary">Add destination</button> 
                </div>
            </form>
            <p>* mandatory field</p>
        </main>
        <footer>
        </footer>
    </body>
</html>

<?php
  mysqli_close($connection);
?>