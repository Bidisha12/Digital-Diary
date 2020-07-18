<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
$firstname = "";
$lastname = "";
$country="";
$subject="";
$db = mysqli_connect('localhost', 'root', '', 'contact');
if(isset($_POST['submit'])){
    $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname= mysqli_real_escape_string($db,$_POST['lastname']);
    $country= mysqli_real_escape_string($db,$_POST['country']);
    $subject= mysqli_real_escape_string($db,$_POST['subject']);
    
    
}
$sql = "INSERT INTO contact (firstname, lastname, country,subject) 
                   VALUES ('$firstname', '$lastname', '$country','$subject')";
 mysqli_query($db, $sql);
 if(isset($_POST['submit'])){
    header("location:Diaryhomepage.php");
 }
?>
