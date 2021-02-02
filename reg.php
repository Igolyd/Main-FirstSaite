<!DOCTYPE html>
<html lang ="ru">
<head>
<?php
	$title = "Регистрация";
	require_once "blocks/head.php"
	?>
</head>
<body>
<div class ="continer">
<h1 id="Registre">Регистрация</h1> 
<form action="Checkout.php" method="post">
<div class ="Unit">
<div class="from-control" id="error_regpassword"> *В логине и в пароле используеться только латинициа<br/>В пароле ещё обязательна должна быть как минимум одна заглавная и одна цифра</div>
<input type="text" class="from-control" onclick="eText" name="login" id="login" placeholder ="Введите логин" onBlur="checkAvailability()">
<div class="from-control" id="error_login"></div>
<div id='user-availability-status'></div>
<input type="text" class="from-control" onclick="IncloudeText" name="email" id="email" placeholder ="Введите почту" onBlur="checkAvailabilityEmail()">
<div class="from-control" id="error_email"></div>
<div id='user-email'></div>
<input type="password" class="from-control" onclick="InceText" name="password" id="password" placeholder ="Введите пароль" onBlur="checkAvailabilityPass()">
<div class="from-control" id="error_password"></div>
<input type="password" class="from-control" name="replaypassword" id="replaypassword" placeholder ="Введите пароль снова">
<div class="from-control" id="error_replaypassword"></div>
<span class="from-control" id="moveauth"><a href="auth.php">Войти</a> если уже зарегистрированы</span>
<button class="btn" type="submit">Зарегистрироваться</button>
<p><img src="img/loading.gif" id="loaderIcon" style="display:none" /></p>
</div>
</form>
</div>
<script type="text/javascript" src="JavaScript.js"></script>
<script>
// Сделать ещё чтобы innerHTML опусташался когда строка становиться пустой
// Сделать чтобы js не реагировал на лишние пробелы и не переставал высвечивать innerHTML
    document.getElementById('email').oninput = function() {
  if (email.value.indexOf('@') === -1)  {
    document.getElementById('error_email').innerHTML = 'Неправильный адрес почты' + '<br>';
    document.getElementById('error_email').style.color='red'
    email = email.trim();
  }
  else {
    document.getElementById('error_email').innerHTML = 'Возможна "правильная" почта';
    document.getElementById('error_email').style.color='green'
  }
}
document.getElementById('login').oninput = function() {
  if (document.getElementById("login").value.length < 3 || document.getElementById("login").value.length > 90)  {
    document.getElementById('error_login').innerHTML = 'Логин должен содержать от 3 до 70 символов и до 50 строчных символов'+ '<br />';
    document.getElementById('error_login').style.color='red';
  }
  else {
    document.getElementById('error_login').innerHTML = "Правильная длина логина";
    document.getElementById('error_login').style.color='green';
    login = login.trim();
    
  }
}
document.getElementById('password').oninput = function() {
  if (document.getElementById("password").value.length < 6 || document.getElementById("password").value.length  > 90)  {
    document.getElementById('error_password').innerHTML = 'Пароль должен содержать от 6 до 90 символов';
    document.getElementById('error_password').style.color='red';
    password = password.trim();
  }
  else {
    document.getElementById('error_password').innerHTML = 'Длинна пароля хорошая';
    document.getElementById('error_password').style.color='green';
    password = password.trim();
  }
}

document.getElementById('replaypassword').oninput = function() {
  if (document.getElementById("password").value != document.getElementById("replaypassword").value)  {
    document.getElementById('error_replaypassword').innerHTML = 'Разные пароли';
    document.getElementById('error_replaypassword').style.color='red';
    password = password.trim();
  }
  else {
    document.getElementById('error_replaypassword').innerHTML = 'Пароли одинаковые';
    document.getElementById('error_replaypassword').style.color='green';
    password = password.trim();
  }
}
</script>
</body>
</html>