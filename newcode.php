<?php

require_once('newconnection.php');

$name = $_POST['user']; 
$Email = $_POST['Email'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];



$un = "SELECT * FROM users WHERE username = '$name'";
$un_conn = mysqli_query($conn,$un) or die(mysqli_error($conn));

if(mysqli_num_rows($un_conn)>0) {
    
   die("<script type='text/javascript'>alert('Username already existed choose another one');</script>".header("refresh:0; url=newregister.php"));
    
    
    }
    if ($password !== $confpassword) {
    die("<script type='text/javascript'>alert('password confirmation is not right');</script>".header("refresh:0; url=newregister.php"));
    
    }
    
    if ( strlen($password) < 8) {
 
   die("<script type='text/javascript'>alert('password must be at least 8 characters.');</script>".header("refresh:0; url=newregister.php"));
    
    }

 

$ins= "INSERT INTO users (username,Email,password) VALUES('$name','$Email','$password')"; 
if(!mysqli_query($conn,$ins)){ 
    die('Error:'. mysqli_error($conn));
} else {
    header('Location:newlogin.php ');
    
}

?>