<?php
session_start();
include 'conn.php';
$update=$_GET['update_id'];
mysqli_query($conn,"UPDATE request_tb set status='1' where login_id='$update'");
mysqli_query($conn,"UPDATE pet_tb set status='Sold' where id='$update'");
header('location:request.php');
?>

