<?php
$login = $_COOKIE['login'];
$password = $_COOKIE['password'];

if($login==NULL){
	header('Location: index.php');
}else{}

include ("mysqli.php");

$infouser = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `user` WHERE '$login'=`phonenumber` and '$password'=`password`"));
?>
<!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="css/account.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mobmenu.css">
  <link rel="shurtcut icon" href="<?php echo $infouser[8];?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Аккаунт : ".$infouser[2]." ".$infouser[3];?></title>
 </head>
 <body>
 <div class="topblock" onclick="downout()">
  <a href="index.php"><img src="resourse/logotip.png" width="120px" height="30px" id="logo"></a>
  </div>
  <div class="menucontent" onclick="downout()">
  <img src="resourse/menu.png" id="buttonaccountmenu" onclick="menuup()">
   <div class="pmenucontent">
    <a href="video.php"><img src="resourse/video.png"><h2>Видео</h2></a>
    <a href="card.php"><img src="resourse/image.png"><h2>Картинки</h2></a>
   </div>
   </div>
   <div class="accountmenu">
    <a href="account.php" id="account"><img src="<?php echo $infouser[8];?>" id="avatar"><h3><?php echo $infouser[2];?></h3></a><img src="resourse/down.png" onclick="downclick()" id="down">
   </div>
  <div class="glblock" id="glblock" onclick="downout()">
   <div class="settingmenu" id="settingmenu">
    <a href="account.php"><h3>Мой аккаунт</h3></a>
	<a href="settingaccount.php"><h3>Настройки</h3></a>
	<a href="help.php"><h3>Поддержка</h3></a>
	<a href="exit.php"><h3>Выход</h3></a>
   </div>
  </div>
  <script src="js/account.js"></script>
 </body>
 </html>