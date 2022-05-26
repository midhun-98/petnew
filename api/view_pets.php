<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM pet_tb");

while($row=mysqli_fetch_assoc($query))

if($query)
{
    $array['msg']='done';
    $array['data']=$row['owner_name'];
    $array['data1']=$row['mobile'];
    $array['data2']=$row['address'];
    $array['data3']=$row['price'];
}
else
{
    $array['msg']='fail';
}
echo json_encode($array);
?>