
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

   <!-- Fixed navbar -->
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
	<h1>Compose Message</h1>
    </center>
    <div class="container">
    <div class="col-lg-4" >
<table class="table" border="2" >
<tr><td><button class="btn btn-success"onclick="location.href='inbox.php'">Inbox</button></td></tr>


<tr><td><button class="btn btn-success">Group Messages</button></td></tr>

<tr><td><button class="btn btn-success" onclick="location.href='sentbox.php'">Sent messages</button></td> </tr>
<tr><td> <button class="btn btn-success" >Compose</button></td> </tr>
</table></div>
<div class="col-lg-8">
<div class="container mtb">
<div class="col-lg-4">
<p><span class="error">* required field.</span></p>
<form action="" id="compose" method="post"> 
<table width="400" border="2" cellspacing="2" cellpadding="0">
<tr> 
<td >Choose friend</td> 
<td><input id="message_recepient"name="message_recepient"size="32" required></td> 
<span class="error" id="message_recepient-error"></span>
</tr>  
<tr> 
<td width="29%" class="bodytext">Message Subject</td> 
<td width="71%"><input id="message_subject"name="message_subject" type="text"  size="32" required></td>
<span class="error" id="message_subject-error"></span> 
</tr> 

<tr> 
<td class="bodytext">Message content:</td> 
<td><textarea id="message_content"name="message_content" cols="45" rows="6" class="bodytext" required></textarea></td> 
<span class="error" id="message_content-error"></span>
</tr> 
<tr> 
<td class="bodytext"> </td> 
<td align="left" valign="top"><input type="submit" name="Send" value="Send"></td> 
</tr> 
</table> 
</form>
</div>
</div>
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

$("#compose").submit(function(e){
	e.preventDefault();
	jQuery.ajax({
		url:"compose2.php",
		data:$(this).serialize(),
		type:'post',
		success:function(data){
			console.log(data);
			
			
			$("#message_recepient").parent().removeClass("has-error");
			$("#message_recepient-error").html("");
			$("#message_subject").parent().removeClass("has-error");
			$("#message_subject-error").html("");
			$("#message_content").parent().removeClass("has-error");
			$("#message_content-error").html("");
		/*	if(data=="message_recepientErr"){
				$("#message_recepient").parent().addClass("has-error");
				$("#").html("Name should	 only contain letters and space");
			}
			else if(data=="message_subjectErr"){
				$("#lname").parent().addClass("has-error");
			}
			else if(data=="message_contentErr"){
				$("#lname").parent().addClass("has-error");
			}*/
		},
		error:function(){
			alert("Network error");
		}
	});
})


/*$("add_friend").on("click",function(a){
	a.preventDefault();
	jQuery.ajax({
		
		
		type:'post',
		success:function(){
			<?php echo "Hello";?>
			
				document.getElementById("add_friend").innerHTML = "Friends";
				
			
		},
		error:function(){
			alert("Network error");
		}
	});
})*/

  	</script>

		</body>
		</html>
