<!DOCTYPE html>
<html lang ="ru">
<head>
<?php
	$title = "Авторизация";
	require_once "blocks/head.php"
	?>
</head>
<body>
<div class ="row">
<h1 id="Autheristre">Авторизация</h1> 
<form action="AuthorisiteCheck.php" method="post">
<div class ="Auth">
<input type="text" required class="from-control-auth" name="logina" id="logina" placeholder ="Введите логин или почту..."><br><br><br><br>
<input type="password" required class="from-control-auth" name="password" id="password" placeholder ="Введите пароль...">
<div id="movereg"><a href="reg.php">Зарегистрываться</a></div>
<button class="btna" type="submit">Войти</button>
</div>
</form>
</div>
<script type="text/javascript" src="JavaScript.js"></script>
</body>
</html>