<?php
session_start();
if(isset($_SESSION['user'])){
	header('location:homepage.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <style>
.error {color: #FF0000;}
</style>

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
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <form class="form-inline" role="form" id="login-form" method="post">
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail2">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail2" name="email1" placeholder="Enter email" required>
			  </div>
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputPassword2">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
			  </div>
			   <button class="btn btn-theme">Sign In</button>
        
			</form>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<br> <br>
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

	 <div class="container mtb" style="background-color: #00b3fe;"	>
	 	<div class="row">
	 		
	 		
	 		<div class="col-lg-8">
		 		<?php

		 			
		 		?>
	 		</div>
	 		<div class="col-lg-4">
	 			<h4>Sign up</h4>
	 			<div class="hline"></div>
		 			<p><span class="error">* required field.</span></p>

		 		
		<form data-toggle="validator" id="myform" role="form" method="post">
		  <div class="form-group">
		    <label for="fname" class="control-label">First Name</label>
		    <input type="text" class="form-control" name="fname" id="fname" placeholder="Your name" 
		    value="" required="required">
		    <span class="error" id="fname-error"></span>
		  </div>

		   <div class="form-group">
		    <label for="lname" class="control-label">Last Name</label>
		    <input type="text" class="form-control" id="lname" name="lname" placeholder="Your surname" value="" required="required">
		 <!--   <span class="error">*<?php echo $lnameErr;?></span>-->
		  </div>
  
		  <div class="form-group">
		    <label for="email" class="control-label">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required="required">
		 <!--   <span class="error">*<?php echo $emailErr;?></span>-->
		    <div class="help-block with-errors"></div>
		  </div>
		  <div class="form-group">
		    <label for="passwd" class="control-label">Password</label><br>
		    
		    <input type="password"  class="form-control" id="passwd" name="passwd" placeholder="Password" required="required">
		 <!--   <span class="error">*<?php echo $passwdErr;?></span>-->
		    <span class="help-block">Min 6 characters</span>
		    </div>
		    <div class="form-group">
		     <label for="reenter" class="control-label">Confirm</label><br>
		      <input type="password" class="form-control" id="reenter" name="reenter"  placeholder="Confirm" required="required">
		<!--	<span class="error">*<?php echo $reenterErr;?></span>-->
			<div class="help-block with-errors"></div>
   			 </div>
    <br>
  
		  
		  <div class="form-group">
		    
		      <div class="help-block with-errors"></div>
		    
		  </div>
		  
   
       <div class="form-group">
   <button class="btn btn-theme" id="submit">Submit</button>
  </div>
        				 
					
			
			</form>
			</div><! --/col-lg-4 -->
	 	</div><! --/row -->
	 </div><! --/container -->
	




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



$("#myform").submit(function(e){
	e.preventDefault();
	jQuery.ajax({
		url:"signup.php",
		data:$(this).serialize(),
		type:'post',
		success:function(data){
			console.log(data);

			
			$("#fname").parent().removeClass("has-error");
			$("#fname-error").html("");
			$("#lname").parent().removeClass("has-error");
			$("#lname-error").html("");
			if(data=="fnamerr"){
				$("#fname").parent().addClass("has-error");
				$("#fname-error").html("Name should	 only contain letters and space");
			}
			else if(data=="lnamerr"){
				$("#lname").parent().addClass("has-error");
			}
		},
		error:function(){
			alert("Network error");
		}
	});
})


$("#login-form").submit(function(e){
	e.preventDefault();
	jQuery.ajax({
		url:"php/login.php",
		data:$(this).serialize(),
		type:'post',
		success:function(data){
			console.log(data);
			if(data=="done"){
				location.reload();
			}
		},
		error:function(){
			alert("Network error");
		}
	});
})
</script>




  </body>
</html>



