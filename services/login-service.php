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
           if(isset($_SESSION['id'])){
               header('Location:' . URL . 'home-page.php');
           }
        } else {
            $message = "Invalid Username or Password";
        }
    } 
    unset($_POST);
?>