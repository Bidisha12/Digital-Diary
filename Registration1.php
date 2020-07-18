<?php include("ser.php"); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="register.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="r.js"></script>
<title>Registration Form</title>
<body>
    <div class="bg-img">
    
    <form class="container" name="myForm" method="POST">
      <?php include('errors.php'); ?>
      <div class="header">
        <h1>Register Now</h1>    
    </div>

   <br> <label for="username" style="color:white"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email" style="color:white"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw" style="color:white"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<center>
    <button type="submit" name="register" value="submit" class="btn" >Register</button>
   
      <p class="message" style="color:white">Already a member? <a href="login1.php"><u style="color:yellow">Sign In</u></a></p>
      </center>
    </form>
    </div>
</body>
</html>
