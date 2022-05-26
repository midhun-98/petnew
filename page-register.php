
<?php
session_start();
include 'conn.php';
$filenew = "";
if(isset($_POST['subm']))
  {
	$name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
	$adhar=$_POST['adhar'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$pic=$_FILES['f1']['name'];

 		 if($pic!="") 
 		 {
  			  $filearray=pathinfo($_FILES['f1']['name']);
  			  $file1=rand();
  			  $file_ext=$filearray["extension"];
  			
  			    $filenew=$file1.".".$file_ext;
			
   			   move_uploaded_file($_FILES['f1']['tmp_name'],"images/gallery/".$filenew);

		  }
  

    mysqli_query($conn,"INSERT INTO login_tb(username,password,type) VALUES ('$user','$pass','vendor')");
	$id=mysqli_insert_id($conn);

	mysqli_query($conn,"INSERT INTO register_tb(login_id,name,address,mobile,email,adhar,license,username,password)VALUES('$id','$name','$address','$mobile','$email','$adhar','$filenew','$user','$pass')");
    $query=mysqli_query($conn,"SELECT *  FROM login_tb where username='$user' AND password='$pass'");
    
		
		header('location:page-login.php');
	// }
	// else
	// {
	// 	echo"<script>alert('Invalid Username or Password')</script>";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.agile_form input[type=file] {
			width: 88%;
    padding: 0.9em 1em;
    margin: 0em 0em 1em 0;
    color: #fff;
    font-size: 1em;
    border: none;
    outline: none;
    border-bottom: 1px solid #fff;
    background: rgba(236, 236, 236, 0.37);
	font-family: 'Dosis', sans-serif;

		}
		.agile_form input[type=password] {
			width: 88%;
    padding: 0.9em 1em;
    margin: 0em 0em 1em 0;
    color: #fff;
    font-size: 1em;
    border: none;
    outline: none;
    border-bottom: 1px solid #fff;
    background: rgba(236, 236, 236, 0.37);
	font-family: 'Dosis', sans-serif;

		}
		.w3layouts_main wrap {
    width: 25%;
    margin: 2em 8em;
	padding: 2.3em;
    width: 9%;
    margin: 2em 15em;
    float: right;
    background: rgb(80 118 90 / 15%);
}
.icon1 label {
    font-size: 1em;
    letter-spacing: 1px;
    color: #fff;
    font-family: Georgia, serif;;
    padding-bottom: 1em;
    display: block;
    
}
.icon {
    float: left;
    width: 50%;
}

	</style>

<title>Pet Spotter - Sign up</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pet Adoption Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">PET SPOTTER</h1>
    <div class="w3layouts_main wrap">
	  <h2>SIGN UP</h2>
	    <form action="#" method="post" enctype="multipart/form-data" class="agile_form">
		<div class="icon1 icon">
				<label>Name</label>
				<input placeholder="Username" name="name" type="text" required="">
			</div>
			<div class="icon1 icon2">
				<label>Address</label>
				<input placeholder="Username" name="address" type="text" required="">
			</div>
            <div class="icon1 icon">
				<label>Mobile</label>
				<input placeholder="Username" name="mobile" type="text" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
			</div>
            
			<div class="icon1 icon">
				<label>Email</label>
				<input placeholder="Username" name="email" type="email" required="">
			</div>
			<div class="icon1 icon">
				<label>Adhar Number</label>
				<input placeholder="Username" name="adhar" type="text" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
			</div>
			<div class="icon1 icon">
		         <label>License</label>
                 <input  type="file"  onclick="clearerror('t1')" name="f1" required="">
            </div>
			<div class="icon1 icon">
				<label>UserName</label>
				<input placeholder="Username" name="username" type="text" required="">
			</div>
			<div class="icon1 icon">
				<label>Password</label>
				<input placeholder="password" name="password" type="password" required="">
			</div>  
			<div class="clear"></div>           
			<!-- <div class="agileits-rating">
				<h5>Do You Own Pets</h5>
				<ul class="agile_info_select">
					 <li><input type="radio" name="view" id="bad" checked="checked"> 
						  <label for="bad">Yes</label>
						  <div class="check w3"></div>
					 </li>
					 <li><input type="radio" name="view" id="poor"> 
						  <label for="poor">No</label>
						  <div class="check w3ls"></div>
					 </li>
				 </ul>
				 <div class="clear"></div>
			</div>	  -->
			<!-- <h6>Why do you want Adopt a Dog / Puppy</h6>
			<textarea  class="w3l_summary"  required=""></textarea> -->
            <div>
			<input type="submit" value="SIGN up" name="subm">
            </div> 
		</form>
	
	<div class="agileits_copyright text-center">
		<!-- <p>© 2017 Pet Adoption Form. All rights reserved | Design by <a href="//w3layouts.com/" class="w3_agile">W3layouts</a></p> -->
	</div>
</body>
</html>

