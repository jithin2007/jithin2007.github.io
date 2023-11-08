<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
	$_SESSION['username'] = $name;
	echo"<script>alert('Login Successfull')</script>";
	echo"<script>window.open('index.html','_self')</script>";
}else{
	echo"<script>alert('The Username Or Password Is Wrong. Please Try Again')</script>";
	echo"<script>window.open('login.php','_self')</script>";
	
}
?>