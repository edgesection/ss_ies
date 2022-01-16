<?php
$connect = mysqli_connect('localhost','root','','ies');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];

$checkanaloguser = mysqli_query($connect, "SELECT * FROM `user` WHERE '$phonenumber'=`phonenumber`");
if(mysqli_fetch_row($checkanaloguser)[4] == $phonenumber){
	header('Location: index.php');
}else{
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($connect, "INSERT INTO `user` (`id`,`password`,`firstname`,`lastname`,`phonenumber`,`dateofbirth`,`country`,`city`,`avatar`) VALUES ('','$password','$firstname','$lastname','$phonenumber','','','','')");
	header('Location: account.php');
}
?>