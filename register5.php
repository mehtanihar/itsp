<?php
	

	
	
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


<div class="conatiner mtb">
<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
   Just a final step and ITS DONE!!
  </div>
</div>
</div>


  <!-- *****************************************************************************************************************
   Register
   ***************************************************************************************************************** --> 
<form class="container mtb" action="homepage.php" method="POST">
  <fieldset>
    <div id="legend">
      <legend class=""><b> Step 5: Manage your privacy:</b></legend>
    </div>


<br><br>
<b>1. What among these will you like to keep as public: </b><br>
<input type="radio" name="image" value="image">Your Images<br>
<input type="radio" name="status" value="status">Your status updates<br>
<input type="radio" name="comments" value="comments">Your comments<br>
<input type="radio" name="last seen" value="last seen">Your last seen<br> 
<input type="radio" name="profile" value="profile">Your profile data<br>
<input type="radio" name="likes" value="likes">Your likes<br>
 
    </fieldset>

     <div class="controls">
         <a href="register4.php" class="btn btn-theme">Back</a>
       <input class="btn btn-theme" type="submit" value="Proceed">
      </div>

   
  
</form>




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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/retina-1.1.0.js"></script>
  <script src="assets/js/jquery.hoverdir.js"></script>
  <script src="assets/js/jquery.hoverex.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>