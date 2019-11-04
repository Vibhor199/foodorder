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
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
			<link rel="stylesheet" href="css/dropdown.css" />
	</head>
<body>

	<?php
		$_SESSION['last_page']="contactus.php";
		database_user();
		if(isset($_SESSION['username']))
		{show2();
		}
		else
		{show();

		}

	?>
	<div id="feedback">
		<a href="feedback.php">feedback</a>
	</div>
	<div id="contactusb">
	<div style="margin:0 auto; width:60%; color:white;">
	<form method="post" action="getorder.php">
		<!--<label>What is your name?</label><input type="text" name="name" class="tbox">
		<br/>
		<label>Dilevery Address:</lable><input type="text" name="daddress">
		<br/>-->
		<label>Food item:</label><select name="food" size="1">
			<option value="Cholebature">Chole Bature</option>
			<option value="rotiandcurry">Roti and curry</option>
			<option value="Idli">Idli</option>
			</select>
		<br/>
		<input type="submit" value="Confirm">
	</form>
	</div>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>

	<footer>
		<nav><a></a></nav>
	</footer>

</body>
</html>
