<?php
$connection = mysqli_connect('localhost','root');

if($connection){
    echo "Connection Established";
}
else{
    echo "Connection Failed";
}

mysqli_select_db($connection,'logindata');

$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Mobile = $_POST['mobile'];
$Mail = $_POST['mail'];

$data = "INSERT INTO people(fname,lname,mobile,mail)values('$Fname','$Lname','$Mobile','$Mail')";

mysqli_query($connection,$data);
header('location:data.php');
?>