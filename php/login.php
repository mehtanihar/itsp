<?php

include "dbconnect.php";
if(!isset($_POST['email']) || !isset($_POST['password']))
	die("incomplete");

$email=mysqli_real_escape_string($con,$_POST['email']);

$username=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$email'");
$count=mysqli_num_rows($username);
if($count==0){die("usererr");}
else{
	$data=mysqli_fetch_assoc($username);
	if($data['user_pass']==$_POST['password']){
		session_start();
		$_SESSION['user']=$email;

		echo 'done';
	}
	else{
		die('passerr');
	}
}
?>