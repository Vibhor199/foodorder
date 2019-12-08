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
  <div>
	<?php
		$_SESSION['last_page']="index.php";
		show2();
    $uid = $_SESSION['userid'];
    $query = "SELECT * FROM Orders WHERE USER_ID=".$uid;
    $con = m_connect('details');
    $result = mysqli_query($con,$query);
	?>
  </div>
	<div id="ordernow">
		<a href="../order.php">Order Now</a>
	</div>
	<div id="feedback">
		<a href="../feedback.php">feedback</a>
	</div>
  <?php
  echo "<div style=\"overflow: auto;\">";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    echo "  <div class=\"ordercard\"> <b>Dish Ordered :</b>    ".$row['FOOD']."<br><br>
    <b>DELIVERY ADDRESS :</b>    ".$row['ADDRESS']."<br><br>
    <b>DATE OF ORDER :</b>    ".$row['DATE']."</div>";
  echo "</div>";
  ?>

	<div style="height:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a>Tasty-Express Copyright � </a></nav>
	</footer>
</body>
</html>
