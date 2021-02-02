<!DOCTYPE html>
<html lang ="ru">
<head>
	<?php
	$title = "Главная страница";
	require_once "blocks/head.php"
	?>
</head>
<body>
<p id ="Workin"></p>
<header>
<div class="wrap"> <!--Создаем дополнительную обертку-родительский элемент -->
			<?php   
			if($_COOKIE['user'] == ''):
			?>
			<div class ="bblock"id ="Reg"><a href="/reg.php">Регистрация</a><br><a href="/auth.php">Войти</a></div> 
			<?php else: ?>
				<div class="bblock" id = "ProvileBlock">
				<img src="/img/Empty.png" alt="Fourd" id ="Profile"/>
				<div id ="BlockProvile" style="display: none;">
				<button class = "ButtonProvile"><a href="/exit.php">Выйти из аккаунта</a></button>
				</div>
			</div>
			<?php endif;?>
			<div class ="bblock"id ="Packet"><a href="#Comentra">Комментарии</a></div>
            <div class="bblock"><a href="#Cont">Контакты</a></div>
			<div class="bblock"><a href="#BIO">Обо мне</a></div>
            <div class="bblock"><a href="#Saite">О работах</a></div>
            <div class="bblock" id ="WorkStr"><a href="#Workin">Работы</a></div>
			<div class ="bblock" id ="Names">Daniil Gavrilov </div>
			<div class="bblock">
				<img src="/img/Logo.jpg" alt="Fourd" id ="Logo"/>
			</div>
</div>
</header>
<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="/img/PhotoSaite.png" alt="First" class="slide" id ="PhotoWork"/><!-- slides -->
		<img src="/img/PhotoGame.jpg" alt="Second" class="slide" />
	</div>
	<div class="slider-nav"><!-- "Previous" and "Next" actions -->
		<button class="slider-previous"></button>
		<button class="slider-next"></button>
	</div>
</div>
<p id ="Saite"></p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>О работах</h1>
	<h3>О сайте</h3>
	<div class ="bgwork">
	<div class ="work" id ="AboutSite">Я сделал этот сайт, чтобы показать мои навыки в web-программировании. Особенно в back-end'еге. 
И я думаю, передать информацию о себе и о своих проектах будет удобнее через сайт. Сайт создавался 2,5 недели.
На сайте используется JavaScript, PHP7, JQuery, Ajax, MySQL5(ну и конечно HTML5 ии CSS)
Многие усилия потрачены на PHP, JS и MySQL. Сайт пока плохо оптимизирован</div>
	</div>
	<br><br><br><br><br>
	<h3>Об игре "Egypt Madness"</h3>
	<p id ="BIO"></p>
	<div class ="bgwork">
		<div class ="work" id ="AboutGame">"Egypt Madness" - игра в жанре хардкор/бродилка. Сюжет повествует о приключениях человека по имени Али. Вначале, события игры разворачиваются в чудном Древнем Египте, но вскоре перетекают в пирамиду Хефрена. Графика в 2D стилистике, анимационная. В игре вас ожидают фантастические места таинственного Египта и пирамиды, а также Борьба с немыслимыми существами, обитающими там. 
Выживание предстоит среди тех существ, коих невозможно победить вашими силами. Игра находится в ранней альфа-версии. Ожидаемый выход ещё не определён. 
Моя роль в создании этой игры- главный программист. Игра разработана на языке C Sharp.</div>
	</div>
	<br><br><br><br><br><br><br><br><br>
	<h1>Биография</h1>
	<p id ="Cont"></p>
	<div class ="bgwork">
		<div class ="work" id ="BIO">Я Даниил Гаврилов, мне 16 лет. С самого детства меня увлекал процесс решения математических и логических задач. В 14 лет я пришёл к тому, что начал заниматься программированием. Тогда я выбрал свой первый язык - C# и создавал на нём мини-игры в Unity. 
Пока я начинал изучать C Sharp я прокачал такие софт скиллы как усидчивость, организованность, дисциплинированность. 
Со временем у меня возникла мысль создать свой сайт и я начал изучать HTML и CSS. Это было начало 2020 года. Я создал не динамический простой сайт и на этом решил пока взять паузу и доделать игровые проекты. 
Меня устраивало создание своих мини-игр, пока я не понял, что мне не хватает рабочих рук, чтобы начать делать серьёзные проекты. Это послужило основной причиной того, что на соответсвующую специальность я поступил в колледж. 
По счастливому стечению обстоятельств, в колледже я познакомился с такими же начинающими художником и аниматором, и вместе мы начали создавать "Egypt Madness". Приблизительно в то же время я познакомился с Git'ом и с помощью него начал обмениваться коддингом. 
Благодаря работе в команде, я научился деловой коммуникации и стал чувствовать себя намного амбициознее. 
В конце декабря этого года я вернулся в веб-программирование и начал изучать PHP, JS, SQL, MySQL, JQuery, Ajax и обновил знания по CSS. </div>
	</div>
	<br><br><br><br><br>
	<h1>Контакты</h1>
	<div class ="bgwcont">
		<div class="ContacBlock" >Мой аккаунт в GitHub</div>
		<div class="ContacBlock">
		<a href="https://github.com/Igolyd"><img src="/img/GitHub.png" alt="GitHub" class="imgcont" id="GitHub" /></a>
		</div>
		<div class="ContacBlock"> Вк</div>
		<div class="ContacBlock">
		<a href="https://vk.com/igolyd"><img src="/img/VK.png" alt="VK" class="imgcont" id="VK" /></a>
		</div>
		<div class="ContacBlock" >Почта: gafden719@gmail.com</div>
	</div>
	<p id ="Comentra"></p>
	<br><br><br><br><br><br>
	<div class ="CommentBlock">
	<?php   
			if($_COOKIE['user'] == ''):
			?>
	<p style="color: #63f84c;"  class="Guper">Необходимо <a href="reg.php">зарегистрироваться</a>/<a href="auth.php">войти</a> для написания комментария</p>
	<?php else: ?>
	<form action="Comment.php" method="post">
	<div id="WarrningPlace"><p>*Длинна символов максимум 145 и максимум 65 из них строчные(верхнем регистре), перенос на следующую строку не допускается</p></div>
	<textarea type="text" name="comment" id="comment" placeholder="Оставьте комментарий" cols="30" rows="5" required onBlur="checkAvailabilityComment()"></textarea>
	<div id="error_comment"></div>
	<input type="submit" id="BtnSub">
	</form>
	<hr>
	<?php endif;?>
	<h2 style="color: #b4b4b4;">Комментарии</h2>
	<? 
		$mysql = new mysqli('Main-FirstSaite','mysql','mysql','aboutme');
		$viewcomm = $mysql->query("SELECT * FROM comments");
		?>
	<?php while ($viewcomms = mysqli_fetch_assoc($viewcomm)) {?>
		<div class="koment">
		<img src="/img/Empty.png" class="ImgProvile" Alt="ProvileImg">
		<div class="name"><?= $viewcomms['Name'] ?></div>
		<div class="date"><?= $viewcomms['date_time']?></div>
		<div class="Message"><?= $viewcomms['commenta']?></div>
		</div>
	<?php } ?>
	<?if(mysqli_num_rows($viewcomm) == 0){?>
	<p id="NullComment">Здесь пока нет комментарий, вы можете быть первым</p>
	<?}?>
	</div>
	<?php 
	require_once "blocks/footer.php"
	?>
	<div class ="wripper">
	</div>
	<script type="text/javascript" src="JavaScript.js"></script>
</body>
</html>