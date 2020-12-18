<?php 


require_once('newconnection.php'); 








if(isset($_POST['submit']))
{
  session_start();
  $_SESSION['username']=$_POST['username'];
$username = $_POST['username'];
$password = $_POST['password']; 
if ($username == "kareem"  && $password == "admin" ) {
  $_SESSION['username'] = $username;

      header('location: h.php');


}

elseif($username == "claire"  && $password == "admin")
{
     $_SESSION['username'] = $username;

      header('location: h.php');

}

else{



$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

$result = mysqli_query($conn,$sql);

}



if(!$result) {
    echo ('check as something went wrong in the sql statement'); }
    
else {
    
    $row = mysqli_fetch_array($result); 
        
    $count = mysqli_num_rows($result);

    if($count == 1) {
      

        header("refresh:0; url=pick up.php") ;
        
        
    } else {
      echo "<script type='text/javascript'>alert('Your Username or Password is invalid please, back and try again.');</script>";
      
      
    }
    }
  }





?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <form name="login" action="newlogin.php" method="POST">

<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username" required="required">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password"name="password" required="required">
  </div>

  <input type="submit" name="submit" class="btn" value="Sign in">
</div>
</form>
  </body>
</html>