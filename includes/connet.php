<?php
	function m_connect($db)
	{
	$server="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($server,$user,$password,$db);
	if(mysqli_connect_error())
	{
		die("Database connection failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
	return $con;
	}


	?>
