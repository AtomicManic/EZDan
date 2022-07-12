<?php
    include 'db/db.php';
    session_start();

    $query = "SELECT * FROM tbl_users_202 WHERE id = " . $_GET['childId'];

    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("DB query failed");
    }

    $row = mysqli_fetch_assoc($result);

    mysqli_close($connection);
?>