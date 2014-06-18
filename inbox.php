
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>SOLID - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="navbar-collapse collapse navbar-right" >
          <ul class="nav navbar-nav">
            <li class="active"><a href="homepage.php">HOME</a></li>
            <li><a href="profile.php">PROFILE</a></li>
         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">SOCIALIZE <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="addfriend.php">FRIEND REQUESTS</a></li>
                <li><a href="inbox.php">MESSAGES</a></li>
                <li><a href="notifications.php">NOTIFICATIONS</li>
                <li><a href="logout.php">Logout</a></li>
             
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div><br><br>

<?php

session_start();
	if(!isset($_SESSION['user'])){
		header("location:./");
	}


	$user_email=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","social") or die("databaseerr"); 
	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");

	$count=mysqli_num_rows($query); 
	if($count==0){header("location:./");}
	else{
		$user=mysqli_fetch_assoc($query); 
	


		$ID=$user['ID'];
		//"add_friend($user['ID'],$row['user_id'])"  document.getElementById("add_friend").innerHTML = "Friends";
$con=mysqli_connect("localhost","root","","social") or die("databaseerr"); 
		$sql = mysqli_query($con,"SELECT ID,user_nicename,user_lastname FROM s_users");

	$sql1=mysqli_query($con,"SELECT * FROM s_messages WHERE message_recepient_id='$ID'");
	$sql2=mysqli_query($con,"SELECT * FROM s_messages WHERE message_sender_id='$ID'");




}
	?>
	
	
	
	<div class="container mtb">
	<center>
	<h1>Your Messages</h1>
    </center>
    <div class="container">
    <div class="col-lg-4" >
<table class="table" border="2" >
<tr><td><button class="btn btn-success">Inbox</button></td></tr>


<tr><td><button class="btn btn-success">Group Messages</button></td></tr>

<tr><td><button class="btn btn-success" onclick="location.href='sentbox.php'">Sent messages</button></td> </tr>
<tr><td> <button class="btn btn-success" onclick="location.href='compose.php'">Compose</button></td> </tr>
</table></div>
<div class="col-lg-8">
<table class="table" border="2">
<?php   
$count=1;
while(	$row=mysqli_fetch_assoc($sql1)){

$ID1=$row['message_sender_id'];
	$sql3=mysqli_query($con,"SELECT ID,user_nicename,user_lastname FROM s_users WHERE ID='$ID1'");
$row4=mysqli_fetch_assoc($sql3);

	
    echo "<tr><td><h3>{$count}:{$row4['user_nicename']}"." "."{$row4['user_lastname']}</h3>"."</td></tr><br>".
         "<tr><td><h4>Subject: {$row['message_subject']}</h4></td></tr>";
         echo "<h5><tr><td>Content:{$row['message_content']}</h4></td></tr>";
         echo "<tr><td><form type='post' id='reply'><textarea rows='2' cols='75' placeholder='type something here' name='message_reply'></textarea>
         <input type='hidden' value='{$ID1}' id='sender_id' name='sender_id'>
         <input type='hidden' value='{$row['message_subject']}' id='subject' name='subject'>
         <button type='submit' name='reply'>Reply</button></td></tr></form>"; 
         $count++;}
 	
		?>
		



		</table>
		</div>
		</div>
		</div>


		<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>About</h4>
		 			<div class="hline-w"></div>
		 			<p>This is our social networking site. Made by students of IIT Bombay</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="www.dribbble.com"><i class="fa fa-dribbble"></i></a>
		 				<a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
		 				<a href="http://twitter.com"><i class="fa fa-twitter"></i></a>
		 				
		 				
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Our Bunker</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 			    Mechanical engineering<br>
		 				IIT Bombay<br> 
		 				Powai, Mumbai<br>
		 				Maharashtra.
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->

	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>

  	<script>


$("#reply").submit(function(e){
	e.preventDefault();
	jQuery.ajax({
		url:"compose2.php",
		data:{
		  sender_id:sender_id,
		  subject:subject},
		  data:$(this).serialize(),
		
			
		type:'post',
		success:function(data){
			console.log(data);

			
			
		},
		error:function(){
			alert("Network error");
		}
	});
})


</script>



  	</script>

		</body>
		</html>
