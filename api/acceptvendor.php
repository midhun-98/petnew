<?php
include 'conn.php';
$update=$_POST['update_id'];
$query=mysqli_query($conn,"UPDATE request_tb set status='1' where login_id='$update'");
$query1=mysqli_query($conn,"UPDATE pet_tb set status='Sold' where id='$update'");

if($query&&$query1)
{
    echo 'Done';
}
else
{
    echo 'Fail';
}
?>