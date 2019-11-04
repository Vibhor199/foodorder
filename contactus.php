<?php
	include('includes/top.php');
	include('includes/connet.php');
	include('includes/session.php');
	include('includes/user_data.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
			<link href="css/userStyle.css" rel="stylesheet" />
			<link rel="icon" type="image/jpg" href="image/logo.jpeg" />			
			<title>Tasty-Express</title>
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/jquery.leanModal.min.js"></script>
			
			<link rel="stylesheet" href="css/floatsign.css" />
	</head>
<body>

	<?php 
		database_user();
		$_SESSION['last_page']="contactus.php";
		if(isset($_SESSION['username']))
		{show2();
		}
		else
		{show();
			
		}
	
	?>
	<div id="ordernow">
		<a href="order.php">Order Now</a>
	</div>
	<div id="feedback">
		<a href="feedback.php">feedback</a>
	</div>
	<div id="contactusb">
		<h1>  Our Corporate address:</h1><a>MVIT</a>
		<h1>  Our Helpline:</h1><a>011-245678</a>
		<h1>  Our Helpline Email-address:</h1><a>csd@somedomain.com</a>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a></a></nav>
	</footer>
</body>
</html>
