
<?php
session_start();
include 'conn.php';
if(isset($_POST['subm']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM login_tb where username='$user' AND password='$pass' AND status='1'");

	if(mysqli_num_rows($query)>0)
    {
		$row=(mysqli_fetch_assoc($query));

	    $_SESSION['id']=$row['login_id'];
		$_SESSION['name']=$row['username'];
		$_SESSION['type']=$row['type'];
		$_SESSION['logedin']=TRUE;
		
		header('location:dashboard.php');
	}
	else
	{
		echo"<script>alert('Invalid Username or Password/Admin Permission Required')</script>";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
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

	</style>

<title>Pet Spotter - Login</title>
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
	  <h2>SIGN IN</h2>
	    <form action="#" method="post" class="agile_form">
		<div class="icon1 icon3">
				<label>Username</label>
				<input placeholder="Username" name="username" type="text" required="">
			</div>
			<!-- <div class="icon1 icon2">
				<label>Last Name</label>
				<input  placeholder=" " name="last name" type="text" required="">
			</div> -->
			<div class="clear"></div>
			<div class="icon1 icon3">
				<label>Password</label>
				<input placeholder="password" name="password" type="password" required="">
			</div>
			<div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="page-register.php">Sign Up Here</a>
                                </p>
                            </div>
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
			<input type="submit" value="SIGN IN" name="subm">
		</form>
	</div>
	<div class="clear"></div>
	<div class="agileits_copyright text-center">
		<!-- <p>© 2017 Pet Adoption Form. All rights reserved | Design by <a href="//w3layouts.com/" class="w3_agile">W3layouts</a></p> -->
	</div>
</body>
</html>

