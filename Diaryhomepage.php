<?php include('ser.php'); ?>
<?php include('diary_server.php'); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{box-sizing: border-box;}

.logo{
height: 73.5px;
width: auto;
float: left;
margin-top: 0px;
}
body {
margin: 0;
}
header{
background-image: url("1.jpg");
background-size: cover;
background-repeat: no repeat;
height: 100%;
width: 100%;
}
#heading1{
   margin-top: 70px;
   text-align: center;
   color:blue;
}
.topnav{
overflow: hidden;
background-color: #e9e9e9;
}
.topnav a{
float: left;
display: bock;
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
.topnav .search-container{
float: right;
}
.topnav input[type=text]{
padding: 6px;
margin-top: 8px;
font-size: 17px;
border: none;
}
.topnav .search-container button{
float: right;
padding: 6px 10px;
margin-top: 8px;
margin-right: 16px;
background: #ddd;
font-size: 17px;
border: none;
cursor: pointer;
}
#textarea{
margin-top: 5px;
height:300px;
width: 95%;
}
.topnav .search-container button:hover {
background: #ccc;
}
@media screen and (max-width:600px){
.topnav .search-container {
float: none;
}
.topnav a, .topnav input[type=text],
.topnav .search-container button {
float: none;
display: block;
text-align: center;
width: 100%;
margin: 0;
padding: 14px;
}
.topnav input[type=text]{
border: 1px solid #ccc;
}
}

input[type=submit]
{
   background-color: aqua;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: large;
}
</style>
</head>
<body>
<header>
<img src="8.png" class="logo">

<div class="topnav">

<a class="active" href="#home">HOME</a>
<a href="About.html">ABOUT</a>
<a href="contact1.php">CONTACT</a>
<a href="home.php">LOGOUT</a>

<br>
</form>
</div>
</div>



<details>

<form method="POST" action="diary_server.php">
</details>
<h1 id="heading1"><u>GIVE TODAY'S ENTRY</u></h1><br>
<?php 
$s1=time();
$date=Date("d-m-y",$s1);
echo "&nbsp;&nbsp;&nbsp;<b><font size=5>Today's Date :$date</font></b><br>";
?>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea id="textarea" name="text" cols="200" placeholder="Start typing..."></textarea></textarea><br>
</p>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit">
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="data" value="CLICK HERE FOR UPDATE">
</form>
</header>




</body>
</html>



