<?php
$con = mysqli_connect('localhost','root','');
if($con){
    echo "Connection Successfull";
}
else{
    echo "No connection ";
}
mysqli_select_db($con,'cardata');
$user=$_POST['User'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$comments=$_POST['comments'];

$query="insert into userinfodata(user,email,mobile,comment) 
values('$user','$email','$mobile','$comments')";

echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>

