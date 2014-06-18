<?php

print_r($_POST);
	session_start();
	print_r($_SESSION);
	$user_email=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","social") or die("databaseerr");
	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");

	
		$user=mysqli_fetch_assoc($query); 


	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['status_content'])){

	$ID=$user['ID'];
	$status_content=$_POST['status_content'];
	$con=mysqli_connect("localhost","root","","social") or die("databaseerr");
	mysqli_query($con,"INSERT INTO s_status(user_id,status_content)
	VALUES('$ID','$status_content')");
                                                                             
	$sql5=mysqli_query($con,"SELECT * FROM s_status WHERE user_id='$ID'");
$count=mysqli_num_rows($sql5); 
	$sql5=mysqli_query($con,"SELECT * FROM s_status WHERE user_id='$ID'");
$sql6=mysqli_query($con,"SELECT * FROM s_status WHERE ID='$count'");
$user1=mysqli_fetch_assoc($sql6); 
$ID1=$user1['ID']; echo $ID1;
$con=mysqli_connect("localhost","root","","social") or die("databaseerr");


	
	echo "done"; 

}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['status_comment'])){

	$ID1=$user['ID'];
	$status_id=$_POST['status-id'];
	$status_content1=$_POST['status-content'];
	$comment=$_POST['status_comment'];
	$comment_receiver_id=$_POST['comment_receiver_id'];
	$con=mysqli_connect("localhost","root","","social") or die("databaseerr");
	$tp=mysqli_query($con,"INSERT INTO comments(status_id,comment_sender_id,comment_receiver_id,comment)VALUES('$status_id','$ID1','$comment_receiver_id','$comment')");
	if(!$tp){echo "Error".mysqli_error($con);}


echo "done comment";
}
?>