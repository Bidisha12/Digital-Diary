<?php include("ser.php"); ?>
<?php include("errors.php"); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="log.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="r.js"></script>
<title>Login Form</title>
</head>
<body>
  <div class="bg-img">
  <?php include('errors.php'); ?>
  <form class="container" method="POST" action="Diaryhomepage.php">
    <div class="header">
        <h1>Log-in to your account</h1>    
    </div>

    <br><br><label for="Email" style="color:white"><b>Username</b></label>
    
    <input type="text" placeholder="Enter Email" name="email" required>
    

   <br> <label for="psw" style="color:white"><b>Password</b></label>
    
    <input type="password" placeholder="Enter Password" name="psw" required>
    <center>
    <button type="submit" name="login" value="submit" class="btn">LOG-IN</button>
    <p class="message" style="color:white">Not yet a member?<a href="registration1.php"><u style="color:yellow">Sign up</u></a></p>
    </center>
  </form>
</div>
</body>
</html>

