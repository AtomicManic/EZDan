<?php
include "db/db.php";
// session_start();

if ($_SESSION['type'] == 1 and isset($_GET['childId'])) {
    $userId = $_GET['childId'];
} else {
    $userId = $_SESSION['id'];
}

$query = "SELECT * FROM dbShnkr22studWeb1.tbl_destinations_202 WHERE user_id =" . $userId;
$result = mysqli_query($connection, $query);
if (!$result) {
    die("DB query failed");
}

mysqli_close($connection);

?>