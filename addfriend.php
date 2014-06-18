
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

	$sql1=mysqli_query($con,"SELECT friend_id FROM s_friends WHERE user_id='$ID'");
	$sql2=mysqli_query($con,"SELECT ID,user_id FROM pending_requests WHERE friend_id='$ID'");



}
	?>
	
	
	
	<div class="container mtb">
	

    
    
		<div  class="col-lg-5">
			<h2> Friend requests </h2><br><br><br>
		<table class="table">
	<?php   


while($row3=mysqli_fetch_assoc($sql2))
{
	$ID1=$row3['user_id'];
	$sql3=mysqli_query($con,"SELECT ID,user_nicename,user_lastname FROM s_users WHERE ID='$ID1'");
$row4=mysqli_fetch_assoc($sql3);

echo "<tr><td>{$row4['user_nicename']}"." "."{$row4['user_lastname']}"."</td>";
echo '<td><button class="btn btn-success" id="add_friend1'.$row4['ID'].'" onclick="addfriend1('.$row4['ID'].')">Accept</button></td>';
echo '<td><button class="btn btn-success" id="add_friend2'.$row4['ID'].'" onclick="addfriend2('.$row4['ID'].')">Reject</button></td></tr><br>';}
?>
</table>
</div>
<div class="col-lg-2"></div>
<div class="col-lg-5">
<h2>People whom you may know</h2>
<table class="table">
<?php   
while($row1=mysqli_fetch_assoc($sql1))
{


$arr1[]=$row1['friend_id'];


}
$arr2=array(); $arr1=array();
$sql2=mysqli_query($con,"SELECT ID,user_id FROM pending_requests WHERE friend_id='$ID'");

while($row2=mysqli_fetch_assoc($sql2))
{


$arr2[]=$row2['user_id'];


}
while(	$row=mysqli_fetch_assoc($sql)){

if($row['ID']!=$user['ID'] && !in_array($row['ID'], $arr1)&&(!in_array($row['ID'], $arr2)||empty($arr2))){ 

{	
    echo "<tr><td>{$row['user_nicename']}".
         " {$row['user_lastname']}</td>";
         echo '<td><button class="btn btn-success
         " id="add_friend'.$row['ID'].'" onclick="addfriend('.$row['ID'].')">Add friend</button></td></tr>';
         
         echo "<br>"; }
}} 	
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
function addfriend(id){
	jQuery.ajax({
		url:"addfriend1.php",
		data:{userid:id},
		type:"post",
		success:function(data){
			if(data=="done"){
				location.reload();
			}
			console.log(data);
		},
		error:function(){
			alert('network error');
		}
	})
	$("#add_friend"+id).html("Friend request sent");
}

function addfriend1(id1){
	jQuery.ajax({
		url:"addfriend1.php",
		data:{userid1:id1},
		type:"post",
		success:function(data){
			if(data=="done"){
				location.reload();
			}
			console.log(data);
		},
		error:function(){
			alert('network error');
		}
	})
	$("#add_friend1"+id1).html("Friend request accepted");
}
function addfriend2(id2){
	jQuery.ajax({
		url:"addfriend1.php",
		data:{userid2:id2},
		type:"post",
		success:function(data){
			if(data=="done"){
				location.reload();
			}
			console.log(data);
		},
		error:function(){
			alert('network error');
		}
	})
	$("#add_friend2"+id2).html("Friend request rejected");
}


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
