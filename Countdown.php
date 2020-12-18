<?php 

session_start();

//if( isset( $time ) ) { 
    $time= $_SESSION['triphours'];
    
    $t= $_SESSION['tripmins']
//} 

   


  







?>
<html>

<head>
    <link rel="stylesheet" href="count.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<title> Thank you </title>

</head>
 


<body>

<h1>Your Trip Details Have Been Saved , Thank you For using Clairo </h1>
<div class="count">

<p>Your Trip Will Start in </p>

<p id="demo"> </p>

<script>
    // Set the date we're counting down to
    
    
    
    var num = <?php echo $time ?>;
    var min= <?php echo $t ?> ;
    
    
   var tm =60 - min ;
   
   
    
   var dt = new Date();
         dt.setHours( dt.getHours()+num) ;
  
              
   if (num==0){
       
       var dt = new Date();
         dt.setHours( dt.getHours()+1) ;
         
         
       
   }  
   
   
      
          
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
      
   
      // Find the distance between now and the count down date
      var distance = dt - now;
      
       
       
    
      // Time calculations for days, hours, minutes and seconds
      
       
  
       
       
     if (num==0){
       
      
         
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))-tm;
    
      var seconds = Math.floor((distance % (1000 * 60)) / 1000); 
      
     
       
    
    
         
       
   }    
       
       
      else if( min<60 && min>0)  
      {
          
        

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))+1;
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)) - tm ;
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    
   if ( minutes<0 )
      
      {
          
          
           var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)) + min ;
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
      }
      
      } 
      
      
     
      
      
      
      
      else{
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))  ;
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      }
    
    
      // Display the result in the element with id="demo"
      
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Your Trip Has Been Started";
      }
    }, 1000);
    
    
    
    
    
    
    
    
    </script>

</div>
<h2> What Do You want to do now Sir?</h2>
<div class="bcount">
    
    
  <a href="Feedback.html" >
    <button class="b1" type="button" > Send us your feedback </button></a>

    
   
<a href="pick up.php">
<button class="b1" type="button" > pick Up Another Bike</button></a>



 
    <a href="index.html" >
<button class="b1" type="button" > Log out Now</button></a>

</div>
</body>




</html>