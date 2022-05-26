<?php
include 'conn.php';
$filenew = "";

    $name=$_POST['name'];
    $address=$_POST['address'];
    $mob=$_POST['mobile'];
    $pin=$_POST['pin'];
    $category=$_POST['category'];
    $title=$_POST['title'];
    $info=$_POST['info'];
    $price=$_POST['price'];
    $pic=$_FILES['f1']['name'];

    if($pic!="") 
 		 {
  			  $filearray=pathinfo($_FILES['f1']['name']);
  			  $file1=rand();
  			  $file_ext=$filearray["extension"];
  			
  			    $filenew=$file1.".".$file_ext;
			
   			   move_uploaded_file($_FILES['f1']['tmp_name'],"images/gallery".$filenew);

		  }
    
    $query=mysqli_query($conn,"INSERT INTO pet_tb(owner_name,address,mobile,pincode,category,title,information,price,image) VALUES ('$name','$address','$mob','$pin','$category','$title','$info','$price','$filenew')");
    
    if($query)
    {
        echo 'done';
    }
    else
    {
        echo 'fail';
    }
?>