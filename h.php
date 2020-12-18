<?php 
session_start();

$name=$_SESSION['username'];

?>

  
<!DOCTYPE html>
<html>
<head>
  <title>Admins </title>

  
  <style type="text/css">

  	header{
   margin: 200px;
  		text-align: center;
  		font-size: 40px;
  	}
  	button{
  	    color:white;
  		font-size: 20px;
  		border-radius:20px;
  		background-color:orange;

  	}



  </style>
</head>
<body>
<header>

	<p> welcome Admin <?php echo " ". htmlspecialchars($name) ; ?> what do you want to do?</p>

<a href="Add.php"><button>Add vehicles </button></a>

<a href="monitor.php"><button>Monitor Trips   </button></a>

<a href="Delete.php"><button> Delete Database  </button></a>

<a href="index.html"><button>Go to the home page </button></a>



</header>
</body>
   

    
</body>
</html>