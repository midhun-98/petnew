<?php
include 'conn.php';
$query=mysqli_query($conn,"DELETE FROM login_tb where login_id=''");
 
if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}
?>