<?php
$element = '<div id="blocklogin"><!--Форма авторизации-->
  <div class="auth" id="auth"><!--Форма входа-->
    <div style="background:#2E64FE; width: 100vw; height: 30px; position: absolute;"><h3 style="color: white; position: absolute; top: -14px; left: 10px;">Войти</h3></div>
    <form action="auth.php" method="POST" class="blockauth">
     <input type="text" placeholder="Логин" name="login" id="authlogin" required>
     <input type="password" placeholder="Пароль" name="password" id="authpassword" required><br>
	 <input type="submit" value="Войти" id="authsubmit">
    </form>
  </div>
  <div class="reg" id="reg"><!--Форма регистрации-->
   <div style="background: #3ADF00; width: 100vw; height: 30px; position: absolute;"><h3 style="color: white; position: absolute; top: -14px; left: 10px;">Регистрация</h3></div>
   <form action="reg.php" method="POST" class="blockreg">
	 <input type="text" placeholder="Имя" name="firstname" id="regfirstname" minlength="3" required>
	 <input type="text" placeholder="Фамилия" name="lastname" id="reglastname" minlength="3" required>
	 <input type="text" placeholder="Номер телефона" name="phonenumber" id="regphonenumber" minlength="8" required>
	 <input type="password" placeholder="Пароль" name="password" id="regpassword" minlength="7" required>
	 <input type="submit" value="Зарегестрироваться" id="regsubmit">
	</form>
  </div>
  </div>';
?>