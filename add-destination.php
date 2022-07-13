<?php
include 'db/db.php';
session_start();

if ($_SESSION['type'] == 1 && isset($_GET['childId'])) {
    $url = "services/destination-logic.php?childId=" . $_GET['childId'];
} else {
    $url = "services/destination-logic.php";
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>EZDan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- LINKS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="add-destination">
        <header class="row top-header">
            <a href="#">
                <img src="images/EZDan-logo.png" alt="">
            </a>
            <?php include "includes/dropDownLogout.php";?>
        </header>
        <?php
            if($_SESSION['type'] == 2){
                include "includes/childHeader.php";
            }
        ?>
        <main>
            <h3>Add destination</h3>
            <form id="destForm" action="<?php echo $url; ?>" method="POST">
                <div class="container">
                    <div class="form-question">
                        <div>
                            <Label for="dest_name">Destination name:</Label>
                        </div>
                        <input type="text" id="dest_name" name="dest_name" placeholder="Name">
                    </div>

                    <div class="form-question">
                        <div>
                            <Label for="dest_city">*City:</Label>
                        </div>
                        <input type="text" id="dest_city" name="dest_city" placeholder="City" required>
                    </div>

                    <div class="form-question">
                        <div>
                            <Label for="dest_street">*Street:</Label>
                        </div>
                        <input type="text" id="dest_street" name="dest_street" placeholder="Street" required>
                    </div>

                    <div class="form-question">
                        <div>
                            <Label for="dest_number">*Number:</Label>
                        </div>
                        <input type="number" id="dest_number" name="dest_number" placeholder="999" required>
                    </div>

                    <div class="form-question">
                        <div>
                            <Label for="dest_home_or_work">Home:</Label>
                            <input type="radio" id="dest_home_or_work" name="dest_home_or_work" value="home">
                            <Label for="dest_name">Work:</Label>
                            <input type="radio" id="dest_home_or_work" name="dest_home_or_work" value="work">
                        </div>
                    </div>
                </div>

                <?php
            if (isset($_GET['state']) && $_GET['state'] == "edit") {
                echo "<input type='hidden' name = 'dest_id' value=" . $_GET['dest_id'] . ">";
                echo "<input type='hidden' name = 'state' value = 'edit'>";
            }
            ?>
                <div class="form-question submit-btn">
                    <button type="submit" id="destSubmitBtn" class="btn btn-primary">Add destination</button>
                </div>
                <div class="container destErrcontainer" id="errors">

                    <div id="destNameErr" class="alert alert-warning" role="alert">
                        Please Insert a valid Name
                    </div>
                    <div id="destCityErr" class="alert alert-warning" role="alert">
                        Please Insert a valid City
                    </div>


                    <div id="destStreetErr" class="alert alert-warning" role="alert">
                        Please Insert a valid Street
                    </div>
                    <div id="destNumberErr" class="alert alert-warning" role="alert">
                        Please Insert a valid House Number
                    </div>
                </div>
            </form>

            <p>* mandatory field</p>
        </main>
        <footer>
        </footer>
        <script src="scripts/destinationsForm.js"></script>
    </body>

</html>

<?php
mysqli_close($connection);
?>