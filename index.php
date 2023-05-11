<<<<<<< Updated upstream
=======
<?php
$servername = "localhost";
$username = "username";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
>>>>>>> Stashed changes

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.cdnfonts.com/css/agency-fb" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.cdnfonts.com/css/agency-fb');
    </style>
<body>
    <!--Start homepagina-->
    <!--logo-->
    <img id="logo" src="noscam.png">

    <!--Signup achtegrond grijs-->
    <div id="background"></div>
    <!--Signup text en login text-->
    <div id="signuptxt">Sign up</div>
    <div id="logintxt">Log in</div>

    <!--Groene strepen onder login en signup-->
    <div id="stripe1"></div>
    <div id="stripe2"></div>
    <!--Signupform start-->
    <form action="insert.php" method="post">
        <div class="imgcontainer">
        </div>
        <div class="container">
          <label for="uname"><b>Username/email</b></label>
          <input type="text" placeholder="Enter Username/email" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
     
      <button id="signupbtn">Sign up!</button>
      </form>
      <form action="inloggen.php" method="post">
        <div class="imgcontainer">
        </div>
        <div class="container1">
          <label for="uname"><b>Username/email</b></label>
          <input type="text" placeholder="Enter Username/email" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
      </form>
      <!--end login form-->
      <!--start loginbuttons-->
    
      <button id="loginbtn">Log in</button>

    
</body>
</html>