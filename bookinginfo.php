<?php
$con = mysqli_connect('localhost','root');

if(!$con){
echo "no connection";
}

mysqli_select_db($con,'resortuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$aadhar = $_POST['aadhar'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$room = $_POST['room'];

$ask ="insert into bookinginfodata(user,email,mobile,aadhar,checkin,checkout,room) values('$user','$email','$mobile','$aadhar','$checkin','$checkout','$room')";

mysqli_query($con,$ask);

header('location:redirect.php');

?>
