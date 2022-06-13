<?php
include 'conn.php';

    $id=$_POST['id'];  
    $user=$_POST['login_id'];
    
        $query=mysqli_query($conn,"INSERT INTO request_tb(id,login_id) VALUES ('$id','$user')");
        if($query)
        {
        $response['message'] =true;
        }
        else
        {
            $response['message']=false;
        }
    
	   echo json_encode($response);
?>
