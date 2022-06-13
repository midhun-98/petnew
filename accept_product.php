<?php
session_start();
include 'conn.php';
$update=$_GET['update_id'];
mysqli_query($conn,"UPDATE product_request_tb set status='1' where request_id='$update'");
mysqli_query($conn,"UPDATE product_tb set status='Sold' where id='$update'");
header('location:product_request.php');
?>

