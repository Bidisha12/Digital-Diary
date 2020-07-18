<?php
$date="";
$text="";


$db1 = mysqli_connect('localhost','root','','diary1');
if(isset($_POST['submit'])){
    $date=($_POST['date']);
    $text=($_POST['text']);

$sql1 = "INSERT INTO diary1 (date,text)
                    VALUES (NOW(),'$text')";
                    mysqli_query($db1,$sql1);
                    header('location:Diaryhomepage.php');
}
if(isset($_POST['logout'])){
    header("location:home.php");
}
if(isset($_POST['data'])){
    header("location:choosedate.php");
}
?>
