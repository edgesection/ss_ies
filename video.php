<!DOCTYPE html>
 <html>
  <head>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Адаптивность сайта под разные разрешения-->
   <link rel="stylesheet" href="css/vstr.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Видео</title>
  </head>
 <body>
  <div class="topblock">
  <a href="index.php"><img src="resourse/logotip.png" width="120px" height="30px" id="logo"></a>
  </div>
  <div class="menucontent">
   <div class="pmenucontent">
    <a href="video.php"><img src="resourse/video.png"><h2>Видео</h2></a>
    <a href="card.php"><img src="resourse/image.png"><h2>Картинки</h2></a>
    <input type="submit" id="sublogin" value="Войти" onclick="subloginvideo()"><!--Выполняется скрипт JS удаление блока с ID "block"-->
	<script src="js/sublogin.js"></script>
   </div>
  </div>
  <div class="glblock" id="glblock">
   <div class="content" id="content">
   <?php
   include('mysqli.php');
   
   $dbid = mysqli_query($connect, "SELECT `id` FROM `video` ORDER BY `id` DESC");
   $dbname = mysqli_query($connect, "SELECT `name` FROM `video` ORDER BY `id` DESC");
   $dbpreview = mysqli_query($connect, "SELECT `preview` FROM `video` ORDER BY `id` DESC");
   $dbhref = mysqli_query($connect,"SELECT `href` FROM `video` ORDER BY `id` DESC");
   $dbuser = mysqli_query($connect, "SELECT `user` FROM `video` ORDER BY `id` DESC");
   
   while($id=mysqli_fetch_row($dbid) and $name=mysqli_fetch_row($dbname) and $preview=mysqli_fetch_row($dbpreview)and $href=mysqli_fetch_row($dbhref) and $user=mysqli_fetch_row($dbuser)){
    echo '<div class="videocontent"><form action="vp.php" method="POST"><input type="text" name="video" value="'.$href[0].'" class="textvideo"><input type="image" src="'.$preview[0].'" value="'.$name[0].'" class="videopreview" id="'.$name[0].'"><label for="'.$name[0].'"><h4>'.$name[0].'</h4></label></form></div>';
   }
   ?>
   </div>
   <?php include ("formauth.php"); echo $element; ?><!--Форма авторизации-->
  </div>
 </body>
</html>