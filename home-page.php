<?php
    //THIS PAGE MUST HAVE A SESSION OPEN!!!!
    session_start();
    echo 'id: ' . $_SESSION['id'] .', name: ' . $_SESSION['name'];
    
?>