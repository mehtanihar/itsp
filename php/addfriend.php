<?php

	print_r($_POST);
	session_start();
	print_r($_SESSION);
	$user_email=$_SESSION['user'];
	$userid=$_POST["addfriend"];
$con=mysqli_connect("localhost","root","","social") or die("databaseerr");
	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");

	
		$user=mysqli_fetch_assoc($query); 
	

	
	 mysqli_query($con,"INSERT INTO pending_requests(user_id,friend_id) VALUES($user[ID],$userid)");
echo "done";

?>