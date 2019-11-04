<?php
	include('../includes/top_user.php');
	include('../includes/connet.php');
	include('../includes/session.php');
	include('../includes/user_data.php');
	if(!isset($_SESSION['username']))
		{
			header('Location:index.php');
		}
 ?>
<!DOCTYPE html>
<html>
	<head>
			<link href="../css/userStyle.css" rel="stylesheet" />
			<link rel="icon" type="image/jpg" href="../image/logo.jpeg" />			
			<title>Tasty-Express</title>
			<meta charset='UTF-8'>
			<script src="../js/jquery-1.11.3.min.js"></script>
			<script src="../js/jquery.leanModal.min.js"></script>
			<link rel="stylesheet" href="../css/floatsign.css" />
			<link rel="stylesheet" href="../css/dropdown.css" />
			<link href="../css/user.css" rel="stylesheet" />
	</head>
<body>

	<?php 
		$_SESSION['last_page']="index.php";
		show2();
		if(isset($_POST['old_password'])&&isset($_POST['new_password']))
		{
			echo "hi";
		}
	?>
	<div id="ordernow">
		<a href="../order.php">Order Now</a>
	</div>
	<div id="feedback">
		<a href="../feedback.php">feedback</a>
	</div>
	<div id="contactusb">
		<div style="width:50%;margin:0 auto; color:white;">
		<div><h1>Change Password</h1></div>
			<form method="post" action="change_pass.php">
			<label>Enter Old Password :</label><input type="password" name="old_password"/>
			<br/><br/>
			<label>Enter New Password :</label><input type="password" name="new_password"/>
			<br/><br/>
			<div style="border-radius:5px; width:20px; margin:0 auto;"><input type="submit" name="submit" value="Confirm"></div>
			</form>
		</div>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a>Tasty-Express Copyright � </a></nav>
	</footer>
</body>
</html>