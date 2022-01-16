<?php
$date = date("d.m.y");
echo "Дата : ".$date;
$time = date("H.i.s");
echo "<br>Время : ".$time;
echo "<br>Выполняемый файл : ". __file__;
echo "<form method=\"GET\">Ваше имя <input type=\"text\" name=\"name\"><input type=\"submit\" value=\"Отправить\"></form>";
if($_REQUEST['name'] !== null){
	echo "Привет : ".$_REQUEST['name'];
}
echo "<br>IP пользователя : ".$_SERVER['REMOTE_ADDR'];
echo "<br>Ваш браузер : ".$_SERVER['HTTP_USER_AGENT'];
?>