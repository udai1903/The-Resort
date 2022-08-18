<?php
$con = mysqli_connect('localhost','root');

if($con){
echo "Connection successful";
}else{
echo "no connection";
 }

mysqli_select_db($con,'resortuserdata');
$user = $_POST['user'];
$email =$_POST['email'];
$mobile = $_POST['mobile'];
$query =$_POST['query'];

$ask =" insert into userinfodata (user,email,mobile,query) values('$user','$email','$mobile','$query')";

mysqli_query($con,$ask);

header('location:index.php');


?>