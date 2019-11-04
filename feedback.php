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
			<link href="css/feed.css" rel="stylesheet" />
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
		$db_f=m_connect("details");
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
	<?php
	if(isset($_POST['submit']))
		{
			$name=$_POST['fname'];
			$email=$_POST['femail'];
			$sug=$_POST['ftext'];
			if(mysqli_query($db_f,"INSERT INTO feedback VALUES('$name','$email','$sug')"))
			{
				echo "sussesful!!";
			}
			else{
				echo "failed";
			}
		}
	?>
	<div id="contactusb" style="width:500px;">
		<h1>Feed Back</h1>
		<form method="post" action="feedback.php" id="feedform">
			<label>Name:</label>
			<input type="text" name="fname" id="txt"/>
			<br/>	
			<label>E-Mail:</label>
			<input type="text" name="femail" id="txt"/>
			<br/>			
			<label>Suggestion:</label><br/>
			<textarea name="ftext" cols="40" rows="10"></textarea>
			<br/>
			<div id="sub">
			<input type="submit" value="submit" name="submit" id="fsubmit"/>
			</div>
		</form>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a></a></nav>
	</footer>
</body>
</html>
