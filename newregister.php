<!DOCTYPE html>

<html lang="en" dir="ltr">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registeration Form</title>

  <link rel="stylesheet" href="signup.css">
  </link>


</head>

<body>


  <div class="container">

    <form name="register" action="newcode.php" method="POST">
      <h1> Sign UP </h1>

      <div class="textbox">
        <input type="text" placeholder="Username" name="user" Required="Required"/>
      </div>

      <div class="textbox">
        <input type="email" placeholder="Email" name="Email" Required="Required"/>
      </div>

      <div class="textbox">
        <input type="password" placeholder="password" name="password" Required="Required"/>
      </div>

      <div class="textbox">
        <input type="password" placeholder="Confirm password" name="confpassword" Required="Required"/> 
      </div>

      <input type="submit" value="Sign In " name="submit name" class="btn">
  </form>
</div>




</body>
</html>
