<?php

session_start();
//header('location:login.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'order');
$fname = $_POST['n1'];
$lname = $_POST['n2'];
$email = $_POST['n3'];
$name = $_POST['user'];
$pass = $_POST['password'];


$q = " select * from signup  where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into signup(fname , lname , email , name , password) values ('$fname' , '$lname' , '$email' ,'$name' , '$pass') ";
	mysqli_query($con, $qy);
}



?>