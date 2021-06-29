<?php

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'largedata');

if($conn){
  echo "Successfully connected";
}
else{
  echo  "Not connected" ;
}


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];

$query = " insert into userinfodata(user, email, mobile, comment)values('$user','$email','$mobile','$comments') ";

mysqli_query($conn,$query);

header('location:index.php')


?>