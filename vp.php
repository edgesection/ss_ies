<!DOCTYPE html>
 <html>
 <head>
  <title>Видео - <?php include ('mysqli.php'); $videonamepost=$_POST[video]; $videonamedb=mysqli_query($connect, "SELECT `name` FROM `video` WHERE `href`='$videonamepost'"); while($videoname=mysqli_fetch_row($videonamedb)){echo $videoname[0];}?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Адаптивность сайта под разные разрешения-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/video.css">
 </head>
 <body>
  <div class="topblock">
  <a href="index.php"><img src="resourse/logotip.png" width="120px" height="30px" id="logo"></a>
  </div>
  <div class="menucontent">
   <div class="pmenucontent">
    <a href="video.php"><img src="resourse/video.png"><h2>Видео</h2></a>
    <a href="card.php"><img src="resourse/image.png"><h2>Картинки</h2></a>
    <input type="submit" id="sublogin" value="Войти" onclick="subloginvp()"><!--Выполняется скрипт JS удаление блока с ID "block"-->
	<script src="js/sublogin.js"></script>
   </div>
  </div>
  <div class="glblock" id="glblock">
  <div id="video">
   <?php
    $videohref = $_POST['video'];
	echo '<video src="'.$videohref.'" style="width: 80vw;" controls="controls"></video>';
   ?>
  <?php
   include ('mysqli.php');
   $videonamedb=mysqli_query($connect, "SELECT `name` FROM `video` WHERE `href`='$videohref'");
   while($videoname=mysqli_fetch_row($videonamedb)){
   echo '<h3>'.$videoname[0].'</h3>';
   }
  ?>
  </div>
  <?php include ("formauth.php"); echo $element; ?><!--Форма авторизации-->
  </div>
 </body>
 </html>