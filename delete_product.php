<?php
session_start();
include 'conn.php';
$delete=$_GET['delete_id'];
mysqli_query($conn,"DELETE FROM product_request_tb where request_id='$delete'");
header('location: product_request.php');
?>