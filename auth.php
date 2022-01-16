<?php
$connect=mysqli_connect('localhost','root','','ies');/*Прямое подключение к БД. Через include не работает*/

$login = $_POST['login'];/*Сбор введенных данных*/
$password = $_POST['password'];

$dblogin = mysqli_fetch_row(mysqli_query($connect, "SELECT `phonenumber` FROM `user` WHERE '$login'=`phonenumber`"))[0];
$dbpassword = mysqli_fetch_row(mysqli_query($connect, "SELECT `password` FROM `user` WHERE '$login'=`phonenumber`"))[0];
mysqli_close($connect);
if($login == $dblogin and password_verify($password, $dbpassword)){
	setcookie('login', $dblogin);
	setcookie('password', $dbpassword);
	header('Location: account.php');
}else{
	header('Location: index.php');
}
?>