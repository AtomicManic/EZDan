<?php
include '../db/db.php';
session_start();

if ($_GET['state'] == "delete") {

    $dest_id = $_GET['dest_id'];
    $query = "DELETE FROM dbShnkr22studWeb1.tbl_destinations_202 
                    WHERE destination_id = '$dest_id';";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("DB query failed");
    }
    mysqli_close($connection);
    if ($_SESSION['type'] == 1 && isset($_GET['childId'])) {
        header('Location:' . URL . 'childUser.php?childId=' . $_GET['childId']);
    } else if ($_SESSION['type'] == 1) {
        header('Location:' . URL . 'parentUserHomePage.php');
    } else if ($_SESSION['type'] == 2) {
        header('Location:' . URL . 'childUserHomepage.php');
    }
} else {
    if (isset($_POST['dest_name']) && $_POST['dest_name'] != "") {
        $dest_name = mysqli_real_escape_string($connection, $_POST['dest_name']);
    } else {
        $dest_name = 'My Destination';
    }
    $dest_city = mysqli_real_escape_string($connection, $_POST['dest_city']);
    $dest_street = mysqli_real_escape_string($connection, $_POST['dest_street']);
    $dest_number = mysqli_real_escape_string($connection, $_POST['dest_number']);
    if (isset($_POST['dest_home_or_work'])) {
        $dest_home_or_work = mysqli_real_escape_string($connection, $_POST['dest_home_or_work']);
        if ($dest_home_or_work == "home") {
            $dest_home = 1;
            $dest_work = 0;
        } elseif ($dest_home_or_work == "work") {
            $dest_work = 1;
            $dest_home = 0;
        }
    } else {
        $dest_work = 0;
        $dest_home = 0;
    }
    $user_id = 6;       // ADD DYNAMIC USER ID #########################################

    if (isset($_POST['state']) && $_POST['state'] == "edit") {
        $dest_id = $_POST['dest_id'];
        $query = "UPDATE dbShnkr22studWeb1.tbl_destinations_202
                        SET 
                            name = '$dest_name',
                            city = '$dest_city',
                            street = '$dest_street',
                            house_number = '$dest_number',
                            is_work = $dest_work,
                            is_home = $dest_home
                        WHERE destination_id = $dest_id;";
    } else {
        if ($_SESSION['type'] == 1 and isset($_GET['childId'])) {
            $userId = $_GET['childId'];
        } else {
            $userId = $_SESSION['id'];
        }
        $query  = "INSERT INTO dbShnkr22studWeb1.tbl_destinations_202 
                        (name, city, street, house_number, is_work, is_home, user_id)
                        VALUES ('$dest_name', '$dest_city', '$dest_street', '$dest_number',
                        '$dest_work', '$dest_home', '$userId');";  // ADD DYNAMIC USER ID #########################################

    }

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("DB query failed");
    }
    mysqli_close($connection);
    if ($_SESSION['type'] == 1 && isset($_GET['childId'])) {
        header('Location:' . URL . 'childUser.php?childId=' . $_GET['childId']);
    } else if ($_SESSION['type'] == 1) {
        header('Location:' . URL . 'parentUserHomePage.php');
    } else if ($_SESSION['type'] == 2) {
        header('Location:' . URL . 'childUserHomepage.php');
    }
}
