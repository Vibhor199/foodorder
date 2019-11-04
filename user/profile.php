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
	?>
	<div id="ordernow">
		<a href="../order.php">Order Now</a>
	</div>
	<div id="feedback">
		<a href="../feedback.php">feedback</a>
	</div>
	<div id="contactusb">
		<div style="width:50%;margin:0 auto;">
			<div><h3 style="color: white;">Name: <?php echo $_SESSION['name']; ?></h3></div><br/>
			<div><h3 style="color: white;">Address: <?php echo $_SESSION['address']; ?></h3></div><br/>
			<div><h3 style="color: white;">E-Mail: <?php echo $_SESSION['email']; ?></h3></div><br/>
			<div><h3 style="color: white;">Phone No.: <?php echo $_SESSION['phoneno']; ?></h3></div><br/>
		</div>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a></a></nav>
	</footer>
</body>
</html>
