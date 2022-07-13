<?php
    include '../db/db.php';
    session_start();

    $query = "DELETE FROM tbl_users_202 WHERE id=".$_GET['childId'];

    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    
    if(!$result){
        die("DB query failed");
    } else{
        header('Location:' . URL . 'parentUserHomePage.php');
    }  
?>