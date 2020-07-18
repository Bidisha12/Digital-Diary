<?php include("contact_server.php"); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.logo{
height: 73.5px;
width: auto;
float: left;
margin-top: 0px;
}
.topnav{
overflow: hidden;
background-color: aqua;
}
.topnav a{
float: left;
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.topnav a:hover{
background-color: #ddd;
color: black;
}
.topnav a.active{
background-color: #2196F3;
color: white;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #2196F3;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #008080;
  padding: 20px;
}
</style>
</head>
<body>
<div class="topnav">
<img src="8.png" class="logo">


<a class="active" href="#contact1">CONTACT</a>
<a href="Diaryhomepage.php">HOME</a>
<a href="about.html">ABOUT</a>
<a href="home.php">LOGOUT</a>
</div><br>

<h3>Contact Form</h3>

<div class="container">
  <form class="container" method="POST" action="contact_server.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="India">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Your Contact Number and other Details</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
