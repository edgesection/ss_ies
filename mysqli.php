<?php
  $connect=mysqli_connect('localhost','root','root','ies');
  if($connect == false){
	  echo '<style>*{overflow-x: hidden; overflow-y: hidden;}</style><div style="max-width: 100vw; height: 90vh; position: absolute; top: 80px; left: 0px; background: PowderBlue;"><div style="background: grey; width: 34vw;position: absolute; left: 21vw; top: 20vh; border-radius: 10px;"><h2><font color="black">Ошибка в подключении к базам данных <a href="index.html" style="text-decoration: none;"><font color="red">IES</font></a></font></h2></div></div>';
    }
?>