<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html";charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css.css" />
	<script type="text/javascript" src="JavaScript.js"></script>
	<title>Обо мне</title>
</head>
<body>
<header>
<div class="wrap"> <!--Создаем дополнительную обертку-родительский элемент -->
			<div class ="bblock"id ="Reg"><a href="/reg.php">Регистрация</a><br><a href="/auth.php">Войти</a></div> 
			<div class ="bblock"id ="Packet"><a href="">Комментарии</a></div>
            <div class="bblock"><a href="">Контакты</a></div>
			<div class="bblock"><a href="">Биография</a></div>
            <div class="bblock"><a href="">О работах</a></div>
            <div class="bblock" id ="WorkStr"><a href="file:///D:/My Saite/Главная страница, моего сайта.html">Работы</a></div>
			<div class ="bblock" id ="Names">Daniil Gavrilov </div>
			<div class="bblock">
				<img src="/img/Logo.jpg" alt="Fourd" id ="Logo"/>
			</div>
</div>
</header>
<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="/img/image1.jpg" alt="First" class="slide" /><!-- slides -->
		<img src="/img/image3.jpg" alt="Second" class="slide" />
		<img src="/img/image2.jpg" alt="Third" class="slide" />
	</div>
	<div class="slider-nav"><!-- "Previous" and "Next" actions -->
		<button class="slider-previous">Previous</button>
		<button class="slider-next">Next</button>
	</div>
</div>




	<!-- В футоре возможно быдут контакты -->
  <footer>
	<div>
		Все права защишены &copy; 
		<?php 
		echo date ('Y');
		echo " ";
		echo date ('M');
		?>
	</div>
</footer>
</body>
</html>