<?php
session_start();
    include "../db/db.php";

    $name = $_POST['name'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $upper_user = $_SESSION['id'];

    $query = "INSERT INTO tbl_users_202 (name, user_name, password, upper_user,user_type)
                VALUES ('$name', '$username', '$password', '$upper_user','2');";


    echo $query;
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("DB query failed");
    }
    
    header('Location:' . URL . 'parentUserHomePage.php');
?>