<?php
include 'conn.php';

	$user=$_POST['username'];
	$pass=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM login_tb where username='$user' AND password='$pass' AND status='1'");
		
		if($query)
        {
            $array['message']='done';
        }
        else
        {
            $array['message']='fail';
        }
        echo json_encode($array);
?>