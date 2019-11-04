<?php
	include('../includes/connet.php');
	$con=m_connect("admin");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/adminl.css">
		
	</head>
	<body>
		
		<br/>
		<br/>
		<br/>
		<br/>
		<div id="adminh">
			<h1>New Admin </h1>
		</div>
		<div class="wrapper">			
			
				
				<form action="new.php" method="post" id="login">
				<br/>
				<br/>
				<label id="label">Your Name:</label>
				<input type="text" class="name" id="tbox" paceholder="Your name" name="name"/>
				<br/>
				<label id="label">&nbsp; User ID:</label>
				<input type="text" class="username" id="tbox" paceholder="User name" name="username"/>
				<br/>
				<label id="label">Password:</label>
				<input type="password" class="password" id="tbox" palceholder="password" name="password"/>
				<br/>
				<label id="label">Phone No:</label>
				<input type="text" class="phoneno" id="tbox" palceholder="Enter phone no" name="phone_no"/>
				<br/>
				<input type="submit" class="button" id="button" value="Register" name="submit"/>
			</form>
	
		</div>
		
			<?php
				if(isset($_POST['name'])){
				
				
				
						$hip="'";
						$password=$_POST['password'];
						$username=$hip.$_POST['username'].$hip;
						$name=$hip.$_POST['name'].$hip;
						$phone=$hip.$_POST['phone_no'].$hip;
						$salt1="a@b";
						$token=hash('ripemd128',"$salt1$password");
						$token=$hip.$token.$hip;	
						
						$query="INSERT INTO Admin(NAME,USER_NAME,PASSWORD,PHONE) VALUES($name,$username,$token,$phone)";
						mysqli_query($con,$query);
				}
				
				?>
			
		
		<?php
	mysqli_close($con);
		?>
	
		
	</body>
		
</html>