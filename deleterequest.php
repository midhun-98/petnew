<?php
session_start();
include 'conn.php';
$delete=$_POST['delete_id'];
mysqli_query($conn,"DELETE FROM request_tb where request_id='$delete'");
header('location: request.php');
?>