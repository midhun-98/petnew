<?php
include ('conn.php');
$query=mysqli_query($conn,"SELECT * FROM doctor_tb");
$data=array();
while($row=mysqli_fetch_assoc($query))
{
    $array['name']=$row['name'];
    $array['qualification']=$row['qualification'];
    $array['experience']=$row['experience']; 
    $array['lattitude']=$row['lattitude'];
    $array['longitude']=$row['longitude'];
    array_push($data,$array);
}
echo json_encode($data);
?>