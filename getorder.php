<?php
	include('includes/top.php');
	include('includes/connet.php');
	$con = m_connect("details");
	include('includes/session.php');
?>
<!DOCTYPE html>
<html>
	<head>
			<link href="css/userStyle.css" rel="stylesheet" />
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
	</head>
<body>

	<?php
		show();
	?>
	<div id="contactusb">
	<h1 style='color: white;'>Your Reciept</h1>
	<?php
		$hip="'";
		$date1 = $hip.date('d/m/Y h:i:s a', time()).$hip;
		$username = $hip.$_SESSION['name'].$hip;
		$addr = $hip.$_SESSION['address'].$hip;
		$uid = $_SESSION['userid'];
		$item = $hip.$_POST['food'].$hip;
		$query="INSERT INTO Orders(USER_ID,USER_NAME,ADDRESS,FOOD,DATE) VALUES($uid,$username,$addr,$item,$date1)";
		// echo $query;
		mysqli_query($con,$query);

		echo "<h3 style='color: white;'> Order dated ".date('d/m/Y h:i:s a', time())." Placed By: ".$_SESSION['name']."</h3><br/>";
		echo "<h3 style='color: white;'> Delivery Address: ".$_SESSION['address']."</h3><br/>";
		echo "<h3 style='color: white;'> Order Item: ".$_POST['food']."</h3>";
	?>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>

	<footer>
		<nav><a></a></nav>
	</footer>

</body>
</html>
