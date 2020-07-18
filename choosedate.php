<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'diary1');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Data</title>
<style>
body{
background-image: url("5.jpeg");
background-size: cover;
background-repeat: no repeat;
}
input[type="textarea"]{
text-align:top;
}
input[type="date"]{
background-color:lightblue;
width:200px;
}
input[type="submit"]{
background-color:lightblue;
width:200px;
}
.btn{
width: 10%;
height : 5%;
font-size: 22px;
padding: 0px;
}
#textarea{
height:400px;
width : 800px;
}
input{
width : 40%;
height : 5%;
border : 1px;
border - radius : 5px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px grey;
}
    .clearfix:after{
    content: ".";
    visibility: hidden;
    display: block;
    height: 0px;
    clear: both;
    }
    .row{
    max-width: 1160px;
    margin: 0 auto;
    }
    .main-nav{
    float: left;
    margin-top: 30px;
    }
    .main-nav li{
    display: inline-block;
    list-style: none;
    margin-left: 25px;
    }
    .main-nav li a{
    padding: 5px 0;
    color: black;
    text-decoration: none;
    text-transform : uppercase;
    font-size: 110%;
    font-width: 100px;
    }
    .main-nav li a:hover{
    border-bottom: 2px solid #bf55ec;
    }
.logo{
height: 73.5px;
width: auto;
float: left;
margin-top: 0px;
}
</style>
</head>
<body>
<form  style="background-color:lightpink">
<header>
<img src="8.png" class="logo">
<nav>
<div class="row clearfix">
<ul class="main-nav">
<li><a href="About.html">About</a></li>
<li><a href="Contact.html">Contact</a></li>
<li><a href="home.php">Logout</a></li>
<li><a href="Diaryhomepage.php">Previous Page</a></li>
</ul>
</div>
</nav>
</header>
</form>
<center>
<br><h1 style="color:red;"><i><u>Want to Update Your Memories?</u></i></h1>
<h2 style="color:blue;">Give a date and Click on Search to relive the memories of that day </h2>
<div class="container">

<form action ="choosedate.php" method="POST">
<input type = "date" name="date" class="btn" placeholder="Enter date" value="<?php echo $row['date'] ?>">
<input type="submit" name="search" class="btn" value= "Search By Date">

</form>

<?php
if(isset($_POST['search']))
{
$date = $_POST['date'];
$query= "SELECT * FROM diary1 where date='$date' ";
$query_run = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($query_run))
{
  
?>
<form action ="choosedate.php" method="POST">
<input type = "date" name="date" class="btn" placeholder="Enter date" value="<?php echo $row['date'] ?>"/><br>
<input type = "textarea" name="text" id="textarea" colspan="185" placeholder="Enter Your Memory" value="<?php echo $row["text"] ?>"/><br>
<input type="submit" name="update" class="btn" value="Update Data"/>
</form>
<?php
}
}
?>
</center>
</body>
</html>
<?php

if(isset($_POST['update']))
{
$date= $_POST['date'];
$text = $_POST['text'];
$query = "UPDATE diary1 SET date='$_POST[date]', text='$_POST[text]' where date='$_POST[date]' ";
$query_run = mysqli_query($connection,$query);
if($query_run)
{
echo '<script> alert("Data Updated Successfully") </script>';
}
else
{
echo '<script> alert("Data Not Updated ") </script>';
}
}
?>