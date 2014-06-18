<?php

	print_r($_POST);
	session_start();
	print_r($_SESSION);
	$user_email=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","social") or die("databaseerr");
	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");

	
		$user=mysqli_fetch_assoc($query); 

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userid'])){

	$userid=$_POST["userid"];
	mysqli_query($con,"INSERT INTO pending_requests(user_id,friend_id) VALUES($user[ID],$userid)");
	echo "done";
}

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userid1'])){

	$userid1=$_POST["userid1"];
	mysqli_query($con,"DELETE FROM pending_requests WHERE friend_id='$user[ID]'&&user_id='$userid1'");
	mysqli_query($con,"INSERT INTO s_friends(user_id,friend_id) VALUES($user[ID],$userid1)");
	mysqli_query($con,"INSERT INTO s_friends(user_id,friend_id) VALUES($userid1,$user[ID])");
	echo "done";
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userid2'])){

	$userid2=$_POST["userid2"];
	mysqli_query($con,"DELETE FROM pending_requests WHERE friend_id='$user[ID]'&&user_id='$userid2'");
	
	echo "done";
}





?>