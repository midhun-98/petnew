<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM login_tb join register_tb on login_tb.login_id=register_tb.login_id where status='1'");

if(mysqli_num_rows($query)>0)
{
    if($query)
    {
      while($row_data=mysqli_fetch_assoc($query))
      $response[]=$row_data;
    }
}
echo json_encode($response);
?>