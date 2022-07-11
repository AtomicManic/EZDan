<?php
    include 'db/db.php';
    session_start();
    $query = "SELECT * FROM tbl_users_202 WHERE upper_user = " . $_SESSION['id'];

    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("DB query failed");
    }
?>