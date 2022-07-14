<?php
include 'db/db.php';
// session_start();
$query1 = "SELECT * FROM tbl_users_202 WHERE upper_user = " . $_SESSION['id'];

$result1 = mysqli_query($connection, $query1);

if (!$result1) {
    die("DB query failed");
}

mysqli_close($connection);