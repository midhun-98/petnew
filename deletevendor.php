<?php
session_start();
include 'conn.php';
$delete=$_GET['delete_id'];
mysqli_query($conn,"DELETE FROM login_tb where login_id='$delete'");
header('location: managevendor.php');
?>