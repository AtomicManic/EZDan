<?php
include 'db/db.php';

$query = "SELECT * FROM tbl_users_202 WHERE id = " . $_GET['childId'];

$result2 = mysqli_query($connection, $query);

if (!$result2) {
    die("DB query failed");
}

$row2 = mysqli_fetch_assoc($result2);

mysqli_close($connection);