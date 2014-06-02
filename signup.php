<?php

$fname =$lname= $email = $passwd = $reenter = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fname']) &&  isset($_POST['lname'])  && isset($_POST['email']) &&  isset($_POST['passwd'])&&  isset($_POST['reenter'])  ) {
  
    $fname = $_POST["fname"]; 
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        die("fnamerr"); 

    }

  
  
    $lname = ($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
     die("lnamerr"); 
  }
  

  
    $email = ($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       die("emailerr"); 
    }
  }

  if (empty($_POST["passwd"])) {
    die("passwderr");
  } else {
    $passwd = $_POST["passwd"];
  }

  if (empty($_POST["reenter"])) {
    $reenterErr = "Reentering password is required";
  } else {
    $reenter =($_POST["reenter"]);
  }

  if($passwd!=$reenter){
    die("matcherror");
  }



if($fname&&$lname&&$email&&$passwd&&$reenter){


$con=mysqli_connect("localhost","root","","social") or die("databaseerr");


$username=mysqli_query($con,"SELECT user_nicename FROM s_users WHERE user_email='$email'");
$count=mysqli_num_rows($username);
if($count!=0){die("usererr");}
if($count==0){   

mysqli_query($con,"INSERT INTO s_users(user_nicename,user_lastname,user_email,user_pass) VALUES('$fname','$lname','$email','$passwd')");
echo "You have successfully registered!!";

}


echo '<h1>'.$fname.'</h1>';


}
?>