<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
	echo"<script>alert('Username Already Taken')</script>";
	echo"<script>window.open('login.php','_self')</script>";
}else{
	$reg="insert into usertable(name, password) values('$name','$pass')";
	mysqli_query($con, $reg);
	echo"<script>alert('Your Account Has Been Registered Successfully. Please Login To Complete The Process')</script>";
	echo"<script>window.open('login.php','_self')</script>";
}
?>