<?php
session_start();
include 'conn.php';
$update=$_GET['update_id'];
mysqli_query($conn,"UPDATE login_tb set status='1' where login_id='$update'");
header('location:managevendor.php');
?>

