


<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("location:./");
	}

	$user_email=$_SESSION['user'];
	include "php/dbconnect.php";


	$query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");
	$count=mysqli_num_rows($query); echo $count;
	if($count==0){header("location:./");}
	else{
		$user=mysqli_fetch_assoc($query);
	}

	/*$photo="[1,2,3,4,5]";
	

	$photo=json_decode($photo,true);

	if(in_array(5, $photo)){
		print_r("5 is present");
	}
	else{
		print_r("5 is not present");
	}*/

	require_once('class-query.php');
	
	$logged_user_id = 1;

	if(isset($_FILES['img'])){
		if ($_FILES["img"]["error"] > 0) {
	    echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
	  } else {
	    echo "Upload: " . $_FILES["img"]["name"] . "<br>";
	    echo "Type: " . $_FILES["img"]["type"] . "<br>";
	    echo "Size: " . ($_FILES["img"]["size"] / 1024) . " kB<br>";
	    echo "Temp file: " . $_FILES["img"]["tmp_name"] . "<br>";
	   
	      move_uploaded_file($_FILES["img"]["tmp_name"],
	      "upload/" .$user['ID'].".jpg");
	      echo "Stored in: " . "upload/" .$user['ID'].".jpg";

	    
	  }
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

    <title>Home</title>

    


<style type="text/css">
#container1, #container2, #container3, #container4 {
  display:none;
 /* border:3px solid blue;*/
  height:200px;
  overflow:hidden;
}
</style>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="status.css">-->

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
	

	
	 
	
	 
	 
	<!-- *****************************************************************************************************************
	 MIDDLE CONTENT
	 ***************************************************************************************************************** -->

	<div class="container mtb">
	 	<div class="col-lg-2" style="background-color:#FFFFFF;height:400px;float:left;position: relative;bottom:20px;right:90px;outline:#E0E0E0 solid thin;">
			
				 <?php
	 				if(file_exists('./upload/'.$user['ID'].'.jpg')){
	 					echo '<img src="'.'./upload/'.$user['ID'].'.jpg'.'" style="width:180px; height:170px;position: relative;top:15px;border-style:solid;border-width: 5px;border-color: #F0F0F0;">
            '.'<h1>Welcome<br>'. $user['user_nicename']." ".$user['user_lastname'].'</h1><hr />';
	 				}
    
	 			
	 		else {
	 		
	 		echo '<h4>Upload your profile picture</h4>
	 		
				
				
				<form method="post" enctype="multipart/form-data" >
				
					<input type="file" name="img" accept="image/*">
					<button class="btn">Upload</button>
				</form>      
        <h1>Welcome<br>'. $user['user_nicename']."<br>".$user['user_lastname'].'</h1><hr />';

	 		}?>
	 		
	 		</div>


	 		<!-- *****************************************************************************************************************
	 MIDDLE CONTENT-2
	 ***************************************************************************************************************** -->

        
 <div class="col-lg-8" style="background-color:#F0F0F0;height:800px;position: relative;bottom:20px;right:75px;">

       <!-- <h3>Welcome <?php echo $user['user_nicename']." ".$user['user_lastname']; ?></h3>  -->

        	 <div class="container mtb" style="position: relative;bottom:20px;right:300px;">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
        
        <hr>
        <form id="status-form" method="post" role="form" enctype="multipart/form-data" class="share-box">
            <ul class="post-types">
                <li class="post-type">
                    <a class="status" title="" href="#"><i class="icon icon-file"></i> Share an Update</a>
                </li>
                <li class="post-type">
                    <a class="photos" href="#"><i class="icon icon-camera"></i> Add photos</a>
                </li>
            </ul>
            <div class="share">
                <div class="arrow"></div>
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-file"></i> Update Status</div>
                      <div class="panel-body">
                        <div class="form-group">
                            <textarea name="status_content" cols="40" rows="10" id="status" class="form-control message" style="height: 62px; overflow:" placeholder="What's on your mind ?" required></textarea> 
                        </div>
                      </div>
                        <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="btn-group">
                                           <!--   <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i> Location</button> -->
                                              <button type="button" id="status_photo" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
                                                <option value="1" selected="selected">Public</option>
                                                <option value="2">Only my friends</option>
                                                <option value="3">Only me</option>
                                            </select>                                    
                                            <button class="btn btn-primary" type="submit" name="status_submit" id="status_submit">Post</button>                               
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
          </form>
          </div>
          </div>
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <center>
                <h1>Status Updates</h1>
                </center>
                <?php 
                $user_email=$_SESSION['user'];
                $con=mysqli_connect("localhost","root","","social") or die("databaseerr");
                $query=mysqli_query($con,"SELECT * FROM s_users WHERE user_email='$user_email'");
                $user=mysqli_fetch_assoc($query); 
                $ID=$user['ID'];
                $con=mysqli_connect("localhost","root","","social") or die("databaseerr"); 
                $sql = mysqli_query($con,"SELECT ID,user_nicename,user_lastname FROM s_users");
                $sql1= mysqli_query($con,"SELECT * FROM s_status");
                ?>
                <table class="table" border="2">
                <?php   
                $count=1;
                while(  $row=mysqli_fetch_assoc($sql1)){
                $ID1=$row['user_id'];
                $sql3=mysqli_query($con,"SELECT ID,user_nicename,user_lastname FROM s_users WHERE ID='$ID1'");
                $row4=mysqli_fetch_assoc($sql3);
                echo "<tr><td><h3>{$count}:{$row4['user_nicename']}"." "."{$row4['user_lastname']}</h3>"."</td></tr><br>".
                "<tr><td><h4>Subject: {$row['status_content']}</h4></td></tr>";
                echo "<tr><td><form method='post' id='comment-form' role='form' >
                <textarea rows='2' cols='75' placeholder='Reply to this Status' name='status_comment'></textarea>
                <input type='hidden' value='{$ID1}' id='comment_receiver_id' name='comment_receiver_id'>
                <input type='hidden' value='{$row['status_content']}' id='status-content' name='status-content'>
                <input type='hidden' value='{$row['ID']}' id='status-id' name='status-id'>
                <button type='submit' >Reply</button></td></tr></form>"; 
                $count++;}
                ?>
                </table>
              </div>
          </div>
        </div> 
      </div>
    </div>
          
  
  
  

        


    <div class="col-lg-3" style="background-color:#F0F0F0;height:600px;position: absolute;top:100px;right:17px;outline:#E0E0E0 solid thin;">

<br>

<!-- The 4 container content divs. -->
<div id="divLinks">

 <div id="container1" style="height:500px;">




  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="25" style="width: 5%;">
    60%
  </div>



	<!-- *****************************************************************************************************************
	 Register
	 ***************************************************************************************************************** --> 

<form class="container mtb" id="myform1" method="post">
  <fieldset>
   
      <legend class=""><b> Step 1: Basic Information</b></legend>
  

<b>1. Enter your birthdate:<br> </b>
   <!-- Split button -->

 <select name="date">
 <option value="na">Date</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

      
  


 <select name="month">
<option value="na">Month</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
   </select>
   

<select name="year" >
<option value="na">Year</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
</select>
<br><br>
<b>2. You are: </b>
<input type="radio" name="sex" value="male" required>Male
<input type="radio" name="sex" value="female" required>Female
<br><br>
<b>3. You live at: </b> <br>
<textarea name="place_of_res" rows="1" cols="30"></textarea>
 <br><br>
 <b>4. Enter your phone number:</b> <br>
<textarea name="mobile_number" rows="1" cols="30"></textarea>

 
     </fieldset>
<br>

      <a href="index.php" class="btn btn-theme">Back</a>
       <a href="#" onclick="return showDiv('2')" class="btn btn-theme">Skip</a>
      <button class="btn btn-theme" id="submit">Proceed</button>
   
 
  
</form>


 
 </div>

 <div id="container2" style="height:500px;">

<div class="conatiner mtb">
<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
   40% Completed
  </div>
</div>
</div>


  <!-- *****************************************************************************************************************
   Register
   ***************************************************************************************************************** --> 
<form class="container mtb" action="register3.php" method="POST">
  <fieldset>
   
      <legend class=""><b> Step 2: Job and Education</b></legend>
   


<br><br>
<b>1. Education: </b><br>
<textarea rows="1" cols="30"></textarea>
<br><br>
<b>2. Job: </b> <br>
<textarea rows="1" cols="30"></textarea>
 
    </fieldset>

   <br> 
        <a href="#" onclick="return showDiv('1')" class="btn btn-theme">Back</a>
        <a href="#" onclick="return showDiv('3')" class="btn btn-theme">Skip</a>
        <input class="btn btn-theme" type="submit" value="Proceed">
        
     </form>


 </div>

 <div id="container3" style="height:500px;">

 <form class="container mtb" action="homepage.php" method="POST">
  <fieldset>
      <legend class=""><b> Step 5: Manage your privacy:</b></legend>


<br><br>
<b>1. What among these will you like to keep as public: </b><br>
<input type="radio" name="image" value="image">Your Images<br>
<input type="radio" name="status" value="status">Your status updates<br>
<input type="radio" name="comments" value="comments">Your comments<br>
<input type="radio" name="last seen" value="last seen">Your last seen<br> 
<input type="radio" name="profile" value="profile">Your profile data<br>
<input type="radio" name="likes" value="likes">Your likes<br>
 
    </fieldset><br>

         <a href="#" onclick="return showDiv('2')" class="btn btn-theme">Back</a>
       <input class="btn btn-theme" type="submit" value="Proceed">

   
  
</form>

 </div>

 <div id="container4" style="height:500px;">Container #4

 </div>

</div>

<script type="text/javascript">
window.onload = function() { showDiv('1'); }
</script>
 

</div>

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
// Portfolio

    (jQuery);


// From: http://www.webdeveloper.com/forum/showthread.php?266743-Switch-Div-Content-Using-Javascript&p=1229155#post1229155

function showDiv(idInfo) {
  var sel = document.getElementById('divLinks').getElementsByTagName('div');
  for (var i=1; i<sel.length; i++) { sel[i].style.display = 'none'; }
  document.getElementById('container'+idInfo).style.display = 'block';
  return false;
}

        $(document).ready(function(){
            $('.status').click(function() { $('.arrow').css("left", 0);});
            $('.photos').click(function() { $('.arrow').css("left", 146);});
        });




$("#status-form").submit(function(e){
  e.preventDefault();
  jQuery.ajax({
    url:"status.php",
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

$("#comment-form").submit(function(e){
  e.preventDefault();
  jQuery.ajax({
    url:"status.php",
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
  </body>
</html>
