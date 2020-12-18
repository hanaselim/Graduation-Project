<?php
require_once('newconnection.php'); 

session_start();

$name=$_SESSION['username'];


 if(isset($_POST['submit']))
    {
        $_SESSION['triphours']=$_POST['thours'];
        
        $_SESSION['tripmins']=$_POST['tmins'];
        
        
      $name=$_SESSION['username'];

$bikesmenu = $_POST['bikesmenu']; 
$bikesnumber = $_POST['bikesnumber'];
$hours = $_POST['hours'];
$mins = $_POST['mins'];
$pickupstations = $_POST['pickupstations'];
$destinationstations = $_POST['destinationstations'];

 
$ins= "INSERT INTO trips (user_name,bikesmenu,bikesnumber,hours,mins,pickupstations,destinationstations) VALUES('$name','$bikesmenu','$bikesnumber','$hours','$mins','$pickupstations','$destinationstations')"; 
    

    if(!mysqli_query($conn,$ins)){ 
    die('Error:'. mysqli_error($conn));
} else {
    header("refresh:0; url=Countdown.php") ;
}

}         

        

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script> 

function myFunction() {
  document.getElementById("Text").value= Math.random().toString(36).substr(2, 10);
}

 </script>
    
    <title> Pick up your Bike now </title>
    
<link rel="stylesheet" href="pick-up.css"> </link>
  </head>
  <body>

<form name="pick up your bike" action="pick up.php" method="POST">
  <div class="container">
    <h1> <?php echo "welcome"." ".htmlspecialchars($name) ; ?> Pick up your Bike now </h1>
            
            <div class="menu">
              <p>Bikes </p>
                <select  name="bikesmenu" required="required">
                    <option value="">--Please select a Bike--</option>
                    <option value="Mountain Bike">Mountain Bike</option>
                    <option value="Hybrid/Comfort Bike">Hybrid/Comfort Bike</option>
                    <option value="Road Bike">Road Bike</option>
                    <option value="BMX/Trick Bike">BMX/Trick Bike</option>
                    <option value="Commuting Bike">Commuting Bike</option>
                    <option value="Cyclocross Bike">Cyclocross Bike</option>
                </select>




                <select  name="bikesnumber" required="required" >
                    <option value="">-- select Number of Bikes --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    
                </select>
            </div> 
<div class="menu">
              <p>Please select When Do you wants to start your trip </p>
          <input type = "number" name="thours" placeholder="Hours" required="required" ></input>

          <input type = "number" name="tmins" placeholder="Minutes" required="required" ></input>
          
           <p>Duration of your Trip  </p>
          <input type = "number" name="hours" placeholder="Hours" required="required" ></input>

          <input type = "number" name="mins" placeholder="Minutes" required="required" ></input>

          
           
           </div> 
           <br>
           <div class="menu" required="required">
              <p>Bike Station</p>
            <select name="pickupstations" required="required">
                <option value="">-- select a pick up station for your bikes--</option>
                <option value="zamalik station">zamalik station: 20 Abou El Feda Street</option>
                <option value="Garden city ">Garden city Station : 32 El wrod Street </option>
                <option value="Masr El Gdeda Station">Masr El Gdeda Station :19 Selim El Awel Street</option>
                <option value="Manyal station">Manyal station : 55 Elmalek l Slaha Street</option>
                <option value="Maadi Station">Maadi Station : 9 9 Street </option>
                    </select>
          </div>
<br>
          <div class="menu">

            <select id="Destinationstations" name="destinationstations" required="required">
                <option value="">-- select a Destination station for your bikes --</option>
                <option value="zamalik station">zamalik station: 20 Abou El Feda Street</option>
                <option value="Garden city ">Garden city Station : 32 El wrod Street </option>
                <option value="Masr El Gdeda Station">Masr El Gdeda Station :19 Selim El Awel Street</option>
                <option value="Manyal station">Manyal station : 55 Elmalek l Slaha Street</option>
                <option value="Maadi Station">Maadi Station : 9 9 Street </option>
                 </select>
          </div>
          
          
            <h3>Do you have a promo code ?</h3>
      
          <input class="prom" type="text" name="promocode" id="Text" placeholder="Put Your promo code Here!"   > </input>

          <br>
            
          <button onclick="myFunction()" class="btn" type="button" name="promocode generator" >Gnerate Promo code</button>
           
           
            <br>
            <button class="btn" type="submit" name="submit" >Start Trip  </button>
      </div>
    </form>
  </body>
</html>

 