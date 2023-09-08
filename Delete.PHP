<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "DELETE from `product` where pid = '$user_id'";

$result = mysqli_query($conn, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location: table.php');
?>