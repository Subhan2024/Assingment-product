<?php
include 'connection.php';

$user_id = $_POST['id'];
$user_name = $_POST['pname'];
$user_age = $_POST['pcat'];
$user_gender = $_POST['pdes'];
$user_img = $_POST['pimg'];

$update = "update `product` set pname ='$user_name' , pcatagory = '$user_age' , pdescription = '$user_gender' , pimage = '$user_img' where pid = '$user_id' ";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
}
header('location: table.php');
?>