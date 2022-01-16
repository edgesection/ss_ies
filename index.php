<!DOCTYPE html>
<html>
 <head>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Адаптивность сайта под разные разрешения-->
   <link rel="stylesheet" href="css/style.css">
   <title>IES</title>
  </head>
 <body>
  <div class="topblock">
  <a href="index.php"><img src="resourse/logotip.png" width="120px" height="30px" id="logo"></a>
  </div>
  <div class="menucontent">
   <div class="pmenucontent">
    <a href="video.php"><img src="resourse/video.png"><h2>Видео</h2></a>
    <a href="card.php"><img src="resourse/image.png"><h2>Картинки</h2></a>
    <input type="submit" id="sublogin" value="Войти" onclick="sublogin()"><!--Выполняется скрипт JS удаление блока с ID "block"-->
	<script src="js/sublogin.js"></script>
   </div>
  </div>
  <div class="glblock" id="glblock">
  <div id="block">
    <?php
	 include ('mysqli.php');
	 
	 $dbimg = mysqli_query($connect, "SELECT `img` FROM `news` ORDER BY `id` DESC");
	 $dbtext = mysqli_query($connect, "SELECT `text` FROM `news` ORDER BY `id` DESC");
	 $dbid = mysqli_query($connect, "SELECT `id` FROM `news` ORDER BY `id` DESC");
	 $dbvideo = mysqli_query($connect, "SELECT `video` FROM `news` ORDER BY `id` DESC");
	 $dbvideohref = mysqli_query($connect, "SELECT `videohref` FROM `news` ORDER BY `id` DESC");
	 $dbauthor = mysqli_query($connect, "SELECT `author` FROM `news` ORDER BY `id` DESC");
	 if($dbauthor == false){
		 echo '<h2><font color="red">Ошибка с соединением с БД</font></h2>';
		 mysqli_close($connect);
		 exit;
	 }else{}
	 while($img=mysqli_fetch_row($dbimg) and $text=mysqli_fetch_row($dbtext) and $video=mysqli_fetch_row($dbvideo) and $videohref=mysqli_fetch_row($dbvideohref) and $id=mysqli_fetch_row($dbid) and $author=mysqli_fetch_row($dbauthor)){
		 if($video[0]=='yes'){
		 echo '<br><div class="contentblock"><div class="newsimg"><form><input type="text" value="'.$videohref[0].'" name="video" class="textvideo"><input type="image" src="'.$img[0].'" class="buttonvideo" formaction="vp.php" formmethod="POST" id="'.$text[0].'"><label for="'.$text[0].'"><h3>'.$text[0].'</label><font color="red" size="2%" id="videotext"> Видео</font></h3><h4><font color="blue">#'.$id[0].'</font><font color="crimson"> name: "'.$author[0].'"</font></h4></form></div></div><br>';
		 }else{
		 echo '<br><div class="contentblock"><div class="newsimg"><img src="'.$img[0].'"><h3>'.$text[0].'</h3><h4><font color="blue">#'.$id[0].'</font><font color="crimson"> name: "'.$author[0].'"</font></h4></div></div><br>';
		 }
	 }

	?>
  </div>
  <?php include ("formauth.php"); echo $element; ?><!--Форма авторизации-->
  </div>
 </body>
</html>