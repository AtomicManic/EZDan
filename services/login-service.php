<?php
    session_start();
    include 'db/db.php';
    
    if(!empty($_POST['login-username'])){
        $query =    "SELECT * FROM tbl_users_202 
                    WHERE user_name='" . $_POST['login-username']
                    . "' and password = '" 
                    . $_POST['login-pass']
                    ."'";

        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        
    
        if(is_array($row)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['type'] = $row['user_type'];
            if(isset($_SESSION['id'])){
                if($_SESSION['type'] == 1){
                    header('Location:' . URL . 'parentUserHomePage.php');
                } elseif($_SESSION['type'] == 2){
                    header('Location:' . URL . 'childUserHomePage.php');
                }
           }
        } else {
            $message = "Invalid Username or Password";
        }
    } 
    unset($_POST);
?>