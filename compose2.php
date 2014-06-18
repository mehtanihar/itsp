<?php

	print_r($_POST);
	session_start();
	print_r($_SESSION);
	$user_email=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","social") or die("databaseerr");
	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");

	
		$user=mysqli_fetch_assoc($query); 

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message_recepient'])&& isset($_POST['message_subject'])
		&& isset($_POST['message_content'])){

	$message_recepient_id=$_POST["message_recepient"];
	$message_subject=$_POST["message_subject"]; 
	$message_content=$_POST["message_content"];
	

$con=mysqli_connect("localhost","root","","social") or die("databaseerr");


mysqli_query($con,"INSERT INTO s_messages(message_recepient_id,message_sender_id,message_subject,message_content)
	VALUES('$message_recepient_id','$user[ID]','$message_subject','$message_content')");
	echo "done";                                                                              
		
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message_reply'])){

	$message_recepient_id=$_POST["sender_id"];
	$message_subject=$_POST["subject"]; 
	$message_content=$_POST["message_reply"];
	

$con=mysqli_connect("localhost","root","","social") or die("databaseerr");


mysqli_query($con,"INSERT INTO s_messages(message_recepient_id,message_sender_id,message_subject,message_content)
	VALUES('$message_recepient_id','$user[ID]','$message_subject','$message_content')");
	echo "done";                                                                              
		
}
	







?>