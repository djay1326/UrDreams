<?php

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'largedata');

if($conn){
  echo "Successfully connected";
}
else{
  echo  "Not connected" ;
}


$choose = $_POST['choose'];
$comments = $_POST['comment'];

$query = " insert into usersdata(choice,comment)values('$choose','$comments') ";

mysqli_query($conn,$query);

header('location:home.php')


?>