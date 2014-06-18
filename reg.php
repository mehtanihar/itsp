
<?php
session_start();
	if(!isset($_SESSION['user'])){
		header("location:./");
	}

	$user_email=$_SESSION['user'];
	include "php/dbconnect.php";


	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");
	$count=mysqli_num_rows($query); 
	if($count==0){header("location:./");} 
	else{
		$user=mysqli_fetch_assoc($query);
	
	
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mobile_number'])){
echo $count;
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$sex=$_POST['sex']; echo $_POST['sex'];
 if(isset($_POST['place_of_res'])){ $place_of_res=($_POST['place_of_res']);}

 if(isset($_POST['mobile_number'])){ $mobile_number=($_POST['mobile_number']);}

echo "done";
mysqli_query($con1,"CREATE TABLE user_email(ID int,datebirth int, monthbirth int,yearbirth int, place_of_res varchar(250),gender bool,mobile_number int,school varchar(100), college varchar(100), university varchar(100), job varchar(100))");

  
		}
	}
	
	







?>