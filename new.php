<?php
session_start();
include 'conn.php';
$filenew = "";
if(isset($_POST['subm']))
  {
    $name=$_POST['name'];
    $address=$_POST['address'];
    // $mob=$_POST['mobile'];
    // $pin=$_POST['pin'];
    // $category=$_POST['category'];
    // $title=$_POST['title'];
    // $info=$_POST['info'];
    // $price=$_POST['price'];
    // $pic=$_FILES['f1']['name'];
    
   $query=mysqli_query($conn,"INSERT INTO pet_tb(owner_name,address) VALUES ('$name','$address')");
    
   $a=mysqli_query($conn,$query);

    if($a){
        $array['message']="success";
    }
}
else{
    $array['message']="failed";
}
echo json_encode($array);
?>