<?php
    include "../db/db.php";

    $success = 1;

    if($_POST['name'] == '' || $_POST['user_name'] == '' || $_POST['password'] == ''){
        $success = 0;
    }

    if($success){

        $username = $_POST['user_name'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $userId = $_GET['childId'];

        $query = "UPDATE tbl_users_202 
        SET 
            name= '$name',
            user_name= '$username',
            password='$password'
        WHERE id= $userId;";

        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("DB query failed");
        } else {
            header('Location:' . URL . 'childUser.php?childId='.$_GET['childId']);
        }
    } else {
        header('Location:' . URL . 'userForm.php?childId='.$_GET['childId']);
    }
    
?>